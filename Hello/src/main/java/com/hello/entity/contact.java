package com.hello.entity;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

@Entity(name = "contact")
public class contact {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_contact;
	String contact_text;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	users users;

	String created_at;
	String updated_at;

	public int getId_contact() {
		return id_contact;
	}

	public void setId_contact(int id_contact) {
		this.id_contact = id_contact;
	}

	public String getContact_text() {
		return contact_text;
	}

	public void setContact_text(String contact_text) {
		this.contact_text = contact_text;
	}

	public users getUsers() {
		return users;
	}

	public void setUsers(users users) {
		this.users = users;
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
