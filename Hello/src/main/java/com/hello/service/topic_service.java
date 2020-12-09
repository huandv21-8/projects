package com.hello.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.hello.DAO.product_dao;
import com.hello.DAO.topic_dao;
import com.hello.daoimp.topic_imp;
import com.hello.entity.topic;

@Service
public class topic_service implements topic_imp {

	@Autowired
	topic_dao topic_dao;
	@Autowired
	product_dao product_dao;

	public List<topic> list_topic() {
		List<topic> list_topic = topic_dao.list_topic();
		return list_topic;
	}
}
