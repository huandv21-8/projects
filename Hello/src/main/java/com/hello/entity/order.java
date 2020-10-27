package com.hello.entity;

import javax.persistence.CascadeType;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.OneToOne;

@Entity(name = "order")
public class order {

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	int id_order;

	@OneToOne(cascade = CascadeType.ALL)
	@JoinColumn(name = "id_user")
	users customer;

	/*
	 * @OneToOne(cascade = CascadeType.ALL)
	 * 
	 * @JoinColumn(name = "id_user") users employee;
	 */

	float total_money;
	String delivery_address;
	int status;
	int style;
	String created_at;
	String updated_at;

	public int getId_order() {
		return id_order;
	}

	public void setId_order(int id_order) {
		this.id_order = id_order;
	}

	public users getCustomer() {
		return customer;
	}

	public void setCustomer(users customer) {
		this.customer = customer;
	}

	/*
	 * public users getEmployee() { return employee; }
	 * 
	 * public void setEmployee(users employee) { this.employee = employee; }
	 */

	public float getTotal_money() {
		return total_money;
	}

	public void setTotal_money(float total_money) {
		this.total_money = total_money;
	}

	public String getDelivery_address() {
		return delivery_address;
	}

	public void setDelivery_address(String delivery_address) {
		this.delivery_address = delivery_address;
	}

	public int getStatus() {
		return status;
	}

	public void setStatus(int status) {
		this.status = status;
	}

	public int getStyle() {
		return style;
	}

	public void setStyle(int style) {
		this.style = style;
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
