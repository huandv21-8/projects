package com.hello.service;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;

import javax.persistence.Id;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.hello.DAO.category_dao;
import com.hello.DAO.product_dao;
import com.hello.DAO.topic_dao;
import com.hello.DAO.user_dao;
import com.hello.daoimp.product_imp;
import com.hello.entity.category;
import com.hello.entity.product;
import com.hello.entity.size_list;
import com.hello.entity.size_product;
import com.hello.entity.topic;
import com.hello.entity.users;

@Service
public class product_service implements product_imp {

	@Autowired
	product_dao product_dao;
	@Autowired
	category_dao category_dao;
	@Autowired
	topic_dao topic_dao;
	@Autowired
	user_dao user_dao;

	public List<product> list_product() {
		List<product> list = new ArrayList<product>();
		for (int i = 0; i < product_dao.list_product().size(); i++) {
			list.add(product_dao.list_product().get(i));
			if (i >= 8 && i == product_dao.list_product().size()) {
				break;
			}
		}
		return list;
	}

	public List<product> list_product_price() {
		List<product> products = new ArrayList<product>();

		List<product> products1 = product_dao.list_product();

		Collections.sort(products1, new Comparator<product>() { // sort
			public int compare(product pro1, product pro2) {
				if (pro1.getPrice() > pro2.getPrice()) {
					return 1;
				}
				return -1;
			}
		});
		products.add(products1.get(0));
		products.add(products1.get(1));
		products.add(products1.get(2));
//      System.out.println(products);
		return products;
	}

	public product product_detail(int id) {
		product product = null;
		
		for (product pro : product_dao.list_product()) {
			if (pro.getId_product() == id) {
				product = pro;
				product.setImages(product_dao.list_image(id));		
			}
		}
		return product;
	}


	public List<size_list> sizes(int id_product) {
		List<size_list> size_lists = new ArrayList<size_list>();
		int id_size = 0 ;
		for (size_product item : product_dao.list_size_product(id_product)) {
			
			id_size = item.getSize_list().getId_size();
			//System.out.println("id_size : " + id_size);
			size_lists.add(product_dao.size(id_size));		
		}
//		System.out.println(size_lists.size());
		return size_lists;
	}
	
	public List<product> related(int id_product) {
		 List<product> products = new ArrayList<product>();
		 product pro = new product();
		  for (product product : product_dao.list_product()) {
			if (id_product == product.getId_product()) {
				 pro = product;
			}
		}
		  for (product product : product_dao.list_product()) {
			if (pro.getCategory().getId_category() == product.getCategory().getId_category()) {
				products.add(product);
			}
			if (products.size() > 4) {
				break;
			}
		}
//		 System.out.println(products.size());
		return products;
	}
	
	public List<product> shuffleListProduct () {
		List<product> products = product_dao.list_product();
		Collections.shuffle(products);
		return products;
	}
	
	public float maxPriceProduct() {
		float max = 0;
		  for (product product : product_dao.list_product()) {
				if (product.getPrice() > max) {
					 max = product.getPrice();
				}
			}
		return max;
	}
	
	
	public void createProduct(String name, float price, String description,String image) {
	
		category category = new category();
		category.setId_category(1);
		
		topic topic = new topic();
		topic.setId_topic(1);
		
		users users = new users();
		users.setId_user(1);
		
		product pro = new product();
		pro.setCategory(category);
		pro.setTopic(topic);
		pro.setUsers(users);
		pro.setName_product(name);
		pro.setDescription(description);
		pro.setPrice(price);
		pro.setImage(image);
		pro.setStatus(0);
			
		product_dao.createProduct(pro);
	

	}
	
	public void deteteProduct(int id) {
		product pro = product_dao.productbyID(id);
		pro.setStatus(1);
		product_dao.deleteProduct(pro);
		
	}
	
	
}





























