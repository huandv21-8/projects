package com.hello.controller;

import org.springframework.stereotype.Controller;
import org.springframework.transaction.annotation.Transactional;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

@Controller
@RequestMapping("/hihi")
public class shopController {

//	@Autowired
//	SessionFactory sessionFactory;
//	private Session session = sessionFactory.getCurrentSession();

	@GetMapping
	@Transactional
	public ModelAndView name() {
		ModelAndView modelAndView = new ModelAndView("football/shop");
//
//		String sql = "from employee";
//		List<employee> list = session.createQuery(sql).getResultList();
//
//		for (employee emp : list) {
//			System.out.println(emp.getName() + " age : " + emp.getAge());
//		}

		return modelAndView;
	}

}
