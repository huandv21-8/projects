package com.hello.controller;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.ModelAndView;

import com.hello.entity.users;
import com.hello.service.user_service;

@Controller
public class loginController {
	@Autowired
	homeController homeController;
	@Autowired
	user_service user_service;
	

	

	@GetMapping("/login")
	public ModelAndView login() {
		ModelAndView modelAndView = new ModelAndView("football/login");
		return modelAndView;
	}

	@GetMapping("/register")
	public ModelAndView register() {
		ModelAndView modelAndView = new ModelAndView("football/register");
		return modelAndView;
	}
	
	@GetMapping("/logout")
	public ModelAndView logout(HttpServletRequest request) {
		ModelAndView modelAndView = new ModelAndView("football/login");
		HttpSession session = request.getSession();
		session.removeAttribute("user");
		return modelAndView;
	}

	@PostMapping("/checkLogin")
	public ModelAndView checkLogin(HttpServletRequest request,@RequestParam String email, @RequestParam String password, ModelMap map) {
		if (email == null || password == null) {
			map.addAttribute("checkLogin", "Do not leave any boxes blank");
			return login();
		} else {
			if (user_service.checkLogin(new users(email, password))) {
				HttpSession session = request.getSession();
				session.setAttribute("user", email);
//				System.out.println(session.getAttribute("user"));
				return homeController.name();
			}else {
				map.addAttribute("checkLogin", "email or pass sai");
				return login();
			}
		}

	}

	@PostMapping("/checkRegister")
	public ModelAndView checkRegister(@RequestParam String email, @RequestParam String password,
			@RequestParam String confirmPass, ModelMap map) {

		if (email == null || password == null || confirmPass == null) {
			map.addAttribute("checkRegister", "Do not leave any boxes blank");
			return register();
		} else if (!password.equals(confirmPass)) {
			map.addAttribute("checkRegister", "Re-enter the wrong password");
			return register();
		} else {
			if (user_service.register(email, password)) {
				return homeController.name();
			}
			return register();
		}

	}

}
