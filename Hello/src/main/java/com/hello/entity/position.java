package com.hello.entity;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity(name = "position")
public class position {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_position;
	String name_position;
	

	public int getId_position() {
		return id_position;
	}

	public void setId_position(int id_position) {
		this.id_position = id_position;
	}

	public String getName_position() {
		return name_position;
	}

	public void setName_position(String name_position) {
		this.name_position = name_position;
	}



}
