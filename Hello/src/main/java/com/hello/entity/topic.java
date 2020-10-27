package com.hello.entity;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

@Entity(name = "topic")
public class topic {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_topic;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	users users;

	String name_topic;
	int status;
	String created_at;
	String updated_at;

	public int getId_topic() {
		return id_topic;
	}

	public void setId_topic(int id_topic) {
		this.id_topic = id_topic;
	}

	public users getUsers() {
		return users;
	}

	public void setUsers(users users) {
		this.users = users;
	}

	public String getName_topic() {
		return name_topic;
	}

	public void setName_topic(String name_topic) {
		this.name_topic = name_topic;
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
