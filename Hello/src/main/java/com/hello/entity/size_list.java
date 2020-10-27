 package com.hello.entity;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity(name = "size_list")
public class size_list {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_size;

	int size_number;
	String created_at;
	String updated_at;

	public int getId_size() {
		return id_size;
	}

	public void setId_size(int id_size) {
		this.id_size = id_size;
	}

	public int getSize_number() {
		return size_number;
	}

	public void setSize_number(int size_number) {
		this.size_number = size_number;
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
