package com.hello.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.servlet.ModelAndView;

import com.hello.DAO.category_dao;
import com.hello.DAO.product_dao;
import com.hello.DAO.topic_dao;
import com.hello.entity.category;
import com.hello.entity.product;
import com.hello.service.product_service;

@Controller
@RequestMapping("/shop")
public class shopController {

	@Autowired
	topic_dao topic_dao;
	@Autowired
	category_dao category_dao;
	@Autowired
	product_dao product_dao;
	@Autowired
	product_service product_service;

	@GetMapping("")
	@Transactional
	public ModelAndView shop() {
		ModelAndView modelAndView = new ModelAndView("football/shop");
		modelAndView.addObject("list_topic", topic_dao.list_topic());
		modelAndView.addObject("list_category", category_dao.list_category());
		modelAndView.addObject("list_product",product_service.shuffleListProduct());
		return modelAndView;
	}

	@GetMapping(path = "/", produces = "text/plain; charset=utf-8")
	@ResponseBody
	public String shopCategory(@RequestParam int id_category) {
		String htmlString = "";
		for (product product : product_dao.list_product()) {
			if (product.getCategory().getId_category() == id_category) {
				htmlString += "<div class=\"col-lg-4 col-md-6\">\r\n"
						+ "					<div class=\"product__item\">\r\n"
						+ "						<div class=\"product__item__pic set-bg\"\r\n"
						+ "							data-setbg=\"" + product.getImage()
						+ "\" style=\"background-image: url(" + product.getImage() + ");\">\r\n"
						+ "							<div class=\"label new\">New</div>\r\n"
						+ "<ul class=\"product__hover\">\r\n" + 
						"								<li><a href=\""+product.getImage()+"\" class=\"image-popup\"><i\r\n" + 
						"										class=\"fa fa-retweet\"></i></a></li>\r\n" + 
						"								<li><a href=\"#\"><i class=\"far fa-heart\"></i></a></li>\r\n" + 
						"								<li><a href=\"#\"><i class=\"fas fa-shopping-bag\"></i></a></li>\r\n" + 
						"							</ul>" + "						</div>\r\n"
						+ "						<div class=\"product__item__text\">\r\n"
						+ "							<h6>\r\n" + "								<a href=\"#\">"
						+ product.getName_product() + "</a>\r\n" + "							</h6>\r\n"
						+ "							<div class=\"rating\">\r\n"
						+ "								<i class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i\r\n"
						+ "									class=\"fa fa-star\"></i> <i class=\"fa fa-star\"></i> <i\r\n"
						+ "									class=\"fa fa-star\"></i>\r\n"
						+ "							</div>\r\n"
						+ "							<div class=\"product__price\">"+product.getPrice()+"</div>\r\n"
						+ "						</div>\r\n" + "					</div>\r\n" + "				</div>";
			}
		}
		if (htmlString.equals("")) {
			htmlString = "Not product";
		}
		return htmlString;

	}

}
