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

@Entity(name = "topic_blog")
public class topic_blog {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_topic_blog;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	users users;
	String name_topic_blog;

	String created_at;
	String updated_at;

	@OneToMany(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_topic_blog")
	Set<blog> blog;

	public Set<blog> getBlog() {
		return blog;
	}

	public void setBlog(Set<blog> blog) {
		this.blog = blog;
	}

	public int getId_topic_blog() {
		return id_topic_blog;
	}

	public void setId_topic_blog(int id_topic_blog) {
		this.id_topic_blog = id_topic_blog;
	}

	public users getUsers() {
		return users;
	}

	public void setUsers(users users) {
		this.users = users;
	}

	public String getName_topic_blog() {
		return name_topic_blog;
	}

	public void setName_topic_blog(String name_topic_blog) {
		this.name_topic_blog = name_topic_blog;
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
