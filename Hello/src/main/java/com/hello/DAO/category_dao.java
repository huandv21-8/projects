package com.hello.DAO;

import java.util.List;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Scope;
import org.springframework.context.annotation.ScopedProxyMode;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import com.hello.daoimp.category_imp;
import com.hello.entity.category;
import com.hello.entity.topic;

@Repository
@Scope(proxyMode = ScopedProxyMode.TARGET_CLASS)
public class category_dao implements category_imp {
	
	@Autowired
	SessionFactory sessionFactory;

	@Transactional
	public List<category> list_category() {
		
		Session session = sessionFactory.getCurrentSession();
		String sqlString = "from category";

		List<category> list = session.createQuery(sqlString).getResultList();

		
		return list;
	}
	

	@Transactional
	public category categorybyID(int id ) {
		
		Session session= sessionFactory.getCurrentSession();
		String sqlString = "from category where id_category = "+id ;
		category category = (category) session.createQuery(sqlString).getSingleResult();				
		//System.out.println("size anh: "+list_size.size());
		return category;
	}

}
