package com.hello.entity;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

@Entity(name = "size_product")
public class size_product {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_size_product;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_size")
	size_list size_list;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_product")
	product product;

	int goods_sold;
	int inventory;

	String created_at;
	String updated_at;

	public int getId_size_product() {
		return id_size_product;
	}

	public void setId_size_product(int id_size_product) {
		this.id_size_product = id_size_product;
	}

	public size_list getSize_list() {
		return size_list;
	}

	public void setSize_list(size_list size_list) {
		this.size_list = size_list;
	}

	public product getProduct() {
		return product;
	}

	public void setProduct(product product) {
		this.product = product;
	}

	public int getGoods_sold() {
		return goods_sold;
	}

	public void setGoods_sold(int goods_sold) {
		this.goods_sold = goods_sold;
	}

	public int getInventory() {
		return inventory;
	}

	public void setInventory(int inventory) {
		this.inventory = inventory;
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
