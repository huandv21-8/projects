package com.hello.entity;

import java.util.Set;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToMany;
import javax.persistence.OneToOne;

@Entity(name = "order_detail")
public class order_detail {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_order_detail;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_order")
	order order;

	@OneToMany(fetch = FetchType.EAGER, cascade = CascadeType.ALL)
	@JoinColumn(name = "id_product")
	Set<product> product;

	int quantity;
	float price;
	float total_price;
	String created_at;
	String updated_at;

	public int getId_order_detail() {
		return id_order_detail;
	}

	public void setId_order_detail(int id_order_detail) {
		this.id_order_detail = id_order_detail;
	}

	public order getOrder() {
		return order;
	}

	public void setOrder(order order) {
		this.order = order;
	}

	public Set<product> getProduct() {
		return product;
	}

	public void setProduct(Set<product> product) {
		this.product = product;
	}

	public int getQuantity() {
		return quantity;
	}

	public void setQuantity(int quantity) {
		this.quantity = quantity;
	}

	public float getPrice() {
		return price;
	}

	public void setPrice(float price) {
		this.price = price;
	}

	public float getTotal_price() {
		return total_price;
	}

	public void setTotal_price(float total_price) {
		this.total_price = total_price;
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
