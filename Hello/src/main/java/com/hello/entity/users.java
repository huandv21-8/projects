package com.hello.entity;

import java.util.Set;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToMany;
import javax.persistence.OneToOne;

@Entity(name = "users")
public class users {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_user;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_position")
	position position;

	String email;
	String password;
	String name_user;
	int age;
	String gender;	
	int phone;
	int identity_cart;
	String address;
	String created_at;
	String updated_at;

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
	
	

	public position getPosition() {
		return position;
	}

	public void setPosition(position position) {
		this.position = position;
	}

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

	public String getName_user() {
		return name_user;
	}

	public void setName_user(String name_user) {
		this.name_user = name_user;
	}

	public int getAge() {
		return age;
	}

	public void setAge(int age) {
		this.age = age;
	}

	public String getGender() {
		return gender;
	}

	public void setGender(String gender) {
		this.gender = gender;
	}

	public String getAddress() {
		return address;
	}

	public void setAddress(String address) {
		this.address = address;
	}

	public int getPhone() {
		return phone;
	}

	public void setPhone(int phone) {
		this.phone = phone;
	}

	public int getIdentity_cart() {
		return identity_cart;
	}

	public void setIdentity_cart(int identity_cart) {
		this.identity_cart = identity_cart;
	}

	public String getCreated_at() {
		return created_at;
	}

	public void setCreated_at(String created_at) {
		this.created_at = created_at;
	}

	public String getUpdated_at() {
		return updated_at;
	}

	public void setUpdated_at(String updated_at) {
		this.updated_at = updated_at;
	}
	
	

}
