package com.hello.DAO;

import java.util.List;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Scope;
import org.springframework.context.annotation.ScopedProxyMode;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import com.hello.daoimp.product_imp;
import com.hello.entity.image;
import com.hello.entity.product;
import com.hello.entity.size_list;
import com.hello.entity.size_product;

@Repository
@Scope(proxyMode = ScopedProxyMode.TARGET_CLASS)
public class product_dao implements product_imp {

	@Autowired
	SessionFactory sessionFactory;
	
	@Transactional
	public List<product> list_product() {
		Session session = sessionFactory.getCurrentSession();
		String sqlString="from product";
		
		List<product> list_productList = session.createQuery(sqlString).getResultList();
		//List<product> list_productList = List 

		return list_productList;
	}
	
	
	@Transactional
	public List<image> list_image( int id_product) {
		
		Session session= sessionFactory.getCurrentSession();
		String sqlString = "from image where id_product = " + id_product;
		List<image> list_image = session.createQuery(sqlString).getResultList();				
		
		return list_image;
	}
	
	@Transactional
	public List<size_product> list_size_product(int id_product ) {
		
		Session session= sessionFactory.getCurrentSession();
		String sqlString = "from size_product where id_product = "+id_product ;
		List<size_product> list_size_product = session.createQuery(sqlString).getResultList();				
		//System.out.println("size anh: "+list_size.size());
		return list_size_product;
	}
	
	@Transactional
	public size_list size(int id_size ) {
		
		Session session= sessionFactory.getCurrentSession();
		String sqlString = "from size_list where id_size = "+id_size ;
		size_list size = (size_list) session.createQuery(sqlString).getSingleResult();				
		//System.out.println("size anh: "+list_size.size());
		return size;
	}
	
}
