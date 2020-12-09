package com.hello.entity;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

@Entity(name = "image")
public class image {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_image;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_product")
	product product;

	String link_image;
	String created_at;
	String updated_at;

	public int getId_image() {
		return id_image;
	}

	public void setId_image(int id_image) {
		this.id_image = id_image;
	}

	public product getProduct() {
		return product;
	}

	public void setProduct(product product) {
		this.product = product;
	}

	public String getLink_image() {
		return link_image;
	}

	public void setLink_image(String link_image) {
		this.link_image = link_image;
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
