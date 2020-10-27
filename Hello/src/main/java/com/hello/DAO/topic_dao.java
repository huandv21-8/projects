package com.hello.DAO;

import java.util.List;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Scope;
import org.springframework.context.annotation.ScopedProxyMode;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import com.hello.daoimp.topic_imp;
import com.hello.entity.topic;

@Repository
@Scope(proxyMode = ScopedProxyMode.TARGET_CLASS)
public class topic_dao implements topic_imp {

	@Autowired
	SessionFactory sessionFactory;

	@Transactional
	public List<topic> list_topic() {
		Session session = sessionFactory.getCurrentSession();
		String sqlString = "from topic";
	
		List<topic> list = session.createQuery(sqlString).getResultList();
		return list;
	}
}
