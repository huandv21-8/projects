package com.hello.entity;

import java.util.Set;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToMany;

@Entity(name = "users")
public class users {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_user;


	String email;
	String password;
	

	public users() {
		super();
		// TODO Auto-generated constructor stub
	}

	public users(String email, String password) {
		this.email = email;
		this.password = password;
	}

	@OneToMany(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	Set<contact> contacts;
	
	@OneToMany(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	Set<topic> topics;
	
	@OneToMany(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	Set<category> categories;
	
	@OneToMany(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	Set<product> products;
	
	@OneToMany(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	Set<topic_blog> topic_blog;
	
	@OneToMany(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	Set<blog> blog;
	


	public int getId_user() {
		return id_user;
	}

	public void setId_user(int id_user) {
		this.id_user = id_user;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		this.email = email;
	}

	public String getPassword() {
		return password;
	}

	public void setPassword(String password) {
		this.password = password;
	}


}
