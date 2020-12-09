package com.hello.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

import com.hello.service.product_service;

@Controller
@RequestMapping("/Detail")
public class productDetailController {
	
	@Autowired
	product_service product_service;

	@GetMapping("/{id_product}")
	public ModelAndView name(@PathVariable int id_product) {
		ModelAndView modelAndView = new ModelAndView("football/productDetail");
		modelAndView.addObject("productDetail", product_service.product_detail(id_product));
		modelAndView.addObject("sizes",product_service.sizes(id_product));
		modelAndView.addObject("related",product_service.related(id_product));
		return modelAndView;
	}
}
