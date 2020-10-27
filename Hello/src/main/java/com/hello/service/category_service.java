package com.hello.service;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Random;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.hello.DAO.category_dao;
import com.hello.DAO.product_dao;
import com.hello.entity.category;
import com.hello.entity.product;

@Service
public class category_service {

	@Autowired
	category_dao category_dao;

	@Autowired
	product_dao product_dao;

//	@Autowired
//	SessionFactory sessionFactory;

	List<category> list_ranCategories = new ArrayList<category>();

	public List<category> list_category() {

		if (list_ranCategories.size() <= 0) {
			Random rand = new Random();
			for (int i = 0; i < 4; i++) {
				
				int ran = rand.nextInt(category_dao.list_category().size());
				list_ranCategories.add(category_dao.list_category().get(ran));
			}
		}

		return list_ranCategories;

	}

	public HashMap<Integer, Integer> number_product() {
		HashMap<Integer, Integer> number_product = new HashMap<Integer, Integer>();
		List<product> list_productList = product_dao.list_product();

		List<product> products;

		for (category category : list_ranCategories) {
			products = new ArrayList<product>();
			for (product product : list_productList) {

				if (category.getId_category() == product.getCategory().getId_category()) {
					products.add(product);
				}
			}
			number_product.put(category.getId_category(), products.size());
		}

		return number_product;
	}

}
