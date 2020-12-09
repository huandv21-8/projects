package com.hello.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

import com.hello.service.category_service;
import com.hello.service.product_service;
import com.hello.service.topic_service;

@Controller
@RequestMapping("")
public class homeController {

	@Autowired
	category_service category_service;
	@Autowired
	product_service product_service;
	@Autowired
	topic_service topic_service;
	

	@GetMapping
	@Transactional
	public ModelAndView name() {
		ModelAndView modelAndView = new ModelAndView("football/index");
		modelAndView.addObject("list_category", category_service.list_category());
		
		modelAndView.addObject("list_topic", topic_service.list_topic());
		modelAndView.addObject("list_number_product", category_service.number_product());
		modelAndView.addObject("list_product",product_service.list_product());
		modelAndView.addObject("list_product_price",product_service.list_product_price());
		return modelAndView;
	}

}
