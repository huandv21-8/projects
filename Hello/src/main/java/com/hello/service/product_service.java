package com.hello.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.hello.DAO.product_dao;
import com.hello.daoimp.product_imp;
import com.hello.entity.product;

@Service
public class product_service implements product_imp {

	@Autowired
	product_dao product_dao;
	public List<product> list_product() {
		List<product> list = product_dao.list_product();
		return list;
	}
}
