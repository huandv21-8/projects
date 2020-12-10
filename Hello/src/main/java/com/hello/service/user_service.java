package com.hello.service;

import java.nio.charset.StandardCharsets;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.hello.DAO.user_dao;
import com.hello.entity.users;

@Service
public class user_service {

	@Autowired
	user_dao user_dao;

	public boolean checkLogin(users user) {
		boolean check = false;
		String pasString = "";
		try {
			pasString = convertPass(user.getPassword());
		} catch (NoSuchAlgorithmException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		for (users ur : user_dao.list_user()) {
			if (user.getEmail().equals(ur.getEmail()) & pasString.equals(ur.getPassword())) {
				check = true;
				break;
			}
		}
		return check;
	}

	public boolean register(String email, String pass) {
		String converPassString = "";
		try {
			converPassString = convertPass(pass);
		} catch (NoSuchAlgorithmException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		users user = new users(email, converPassString);
		System.out.println(converPassString);
		return user_dao.register(user);
	}

	private String convertPass(String text) throws NoSuchAlgorithmException {
		MessageDigest md = MessageDigest.getInstance("MD5");
		byte[] hashInBytes = md.digest(text.getBytes(StandardCharsets.UTF_8));
		StringBuilder sb = new StringBuilder();
		for (byte b : hashInBytes) {
			sb.append(String.format("%02x", b));
		}
		return sb.toString();
	}

}
