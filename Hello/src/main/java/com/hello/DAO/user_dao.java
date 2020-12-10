package com.hello.DAO;

import java.util.List;

import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Scope;
import org.springframework.context.annotation.ScopedProxyMode;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;

import com.hello.entity.topic;
import com.hello.entity.users;

@Repository
@Scope(proxyMode = ScopedProxyMode.TARGET_CLASS)
public class user_dao {
	
	@Autowired
	SessionFactory sessionFactory;
	
	@Transactional
	public List<users> list_user() {
		Session session = sessionFactory.getCurrentSession();
		String sqlString = "from users";
	
		List<users> list = session.createQuery(sqlString).getResultList();
		return list;
	}

	@Transactional
	public boolean register(users user) {
		Session session = sessionFactory.getCurrentSession();
		session.save(user);
	    int id_user = (Integer) session.save(user);
	
		if(id_user > 0){
			return true;
		}else{
			return false;
		}
		
	}
	
}
