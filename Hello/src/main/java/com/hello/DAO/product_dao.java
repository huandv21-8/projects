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
import com.hello.entity.product;

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
		//List<product> list_productList =List 
				
		
		return list_productList;
	}
}
