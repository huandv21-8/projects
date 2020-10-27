package com.hello.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;

import com.hello.DAO.product_dao;
import com.hello.DAO.topic_dao;
import com.hello.service.category_service;
import com.hello.service.product_service;

@Controller
@RequestMapping("/")
public class homeController {

	@Autowired
	category_service category_service;
	@Autowired
	topic_dao topic_dao;
	@Autowired
	product_service product_service;
	@Autowired
	product_dao product_dao;

	@GetMapping
	@Transactional
	public ModelAndView name() {
		ModelAndView modelAndView = new ModelAndView("football/index");
		modelAndView.addObject("list_category", category_service.list_category());
		
	//	System.out.println("size la : "+category_service.list_category().size());
		
		
		modelAndView.addObject("list_topic", topic_dao.list_topic());
		modelAndView.addObject("list_number_product", category_service.number_product());
		modelAndView.addObject("list_product",product_dao.list_product());
		return modelAndView;
	}

}
