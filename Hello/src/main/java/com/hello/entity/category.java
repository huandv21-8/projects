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

@Entity(name = "category")
public class category {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_category;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_topic")
	topic topic;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	users users;

	String name_category;
	String image_category;
	int status;
	String created_at;
	String updated_at;
	
	@OneToMany(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_category")
	Set<product> products;

	public Set<product> getProducts() {
		return products;
	}

	public void setProducts(Set<product> products) {
		this.products = products;
	}

	public String getImage_category() {
		return image_category;
	}

	public void setImage_category(String image_category) {
		this.image_category = image_category;
	}

	public int getId_category() {
		return id_category;
	}

	public void setId_category(int id_category) {
		this.id_category = id_category;
	}

	public topic getTopic() {
		return topic;
	}

	public void setTopic(topic topic) {
		this.topic = topic;
	}

	public users getUsers() {
		return users;
	}

	public void setUsers(users users) {
		this.users = users;
	}

	public String getName_category() {
		return name_category;
	}

	public void setName_category(String name_category) {
		this.name_category = name_category;
	}

	public int getStatus() {
		return status;
	}

	public void setStatus(int status) {
		this.status = status;
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
