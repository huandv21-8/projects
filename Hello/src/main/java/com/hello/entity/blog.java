package com.hello.entity;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

@Entity(name = "blog")
public class blog {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_blog;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	users users;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_topic_blog")
	topic_blog topic_blog;

	String title;
	String content;
	String created_at;
	String updated_at;

	public int getId_blog() {
		return id_blog;
	}

	public void setId_blog(int id_blog) {
		this.id_blog = id_blog;
	}

	public users getUsers() {
		return users;
	}

	public void setUsers(users users) {
		this.users = users;
	}

	public topic_blog getTopic_blog() {
		return topic_blog;
	}

	public void setTopic_blog(topic_blog topic_blog) {
		this.topic_blog = topic_blog;
	}

	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}

	public String getContent() {
		return content;
	}

	public void setContent(String content) {
		this.content = content;
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
