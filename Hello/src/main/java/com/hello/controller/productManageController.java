package com.hello.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;

import com.hello.service.product_service;

@Controller
public class productManageController {
	
	@Autowired
	product_service product_service;
	@Autowired
	homeController homeController;

	@GetMapping("/createProduct")
	public ModelAndView formCreateProduct() {
		ModelAndView modelAndView = new ModelAndView("football/createProduct");
		return modelAndView;
	}

	@PostMapping("/createProduct")
	public ModelAndView createProduct(@RequestParam String nameProduct, @RequestParam String description,
			@RequestParam float price, @RequestParam String image,ModelMap map) {
		if (nameProduct == null || description == null || price <= 0|| image == null) {
			map.addAttribute("check", "Do not leave any boxes blank");
			return formCreateProduct();
		}else {
			product_service.createProduct(nameProduct, price, description, image);
			return homeController.name();
		}

//		return null;
	}
	
	@GetMapping("/delete/{id_product}")
	public ModelAndView name(@PathVariable int id_product) {
		
		product_service.deteteProduct(id_product);
		
		return homeController.name();
	}
	
}
