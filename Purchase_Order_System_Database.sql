


--User Department----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE UserDepartment
(
	user_dept_id		CHAR(7BYTE)	default(0)		NOT NULL,
	user_dept_department	VARCHAR2(30)	default('-'),
	user_dept_address		VARCHAR2(50)	default('-'),
 	CONSTRAINT pk_user_dept_id PRIMARY KEY (user_dept_id)
);
 
insert into UserDepartment (user_dept_id, user_dept_department, user_dept_address) values (1, 'Administration', '340 Golf View Trail');
insert into UserDepartment (user_dept_id, user_dept_department, user_dept_address) values (2, 'Purchase', '4605 Twin Pines Street');
insert into UserDepartment (user_dept_id, user_dept_department, user_dept_address) values (3, 'Accounts', '08283 Mitchell Plaza');
insert into UserDepartment (user_dept_id, user_dept_department, user_dept_address) values (4, 'Human Resource', '54 Artisan Place');
insert into UserDepartment (user_dept_id, user_dept_department, user_dept_address) values (5, 'Recruitment', '9467 Thackeray Place');


--User Table----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE UserTable
(
	user_id		CHAR(7BYTE)	default(0)		NOT NULL,
	user_name	VARCHAR2(30)	default('-'),
	user_gender	CHAR(7BYTE),
	user_username	VARCHAR2(15)	default('-')	NOT NULL,
	user_password	VARCHAR2(15)	default('-')	NOT NULL,
	user_designation	VARCHAR2(30)	default('-'),
	user_cnic		VARCHAR2(15)	default(0)	, 
	user_hiredate	DATE, 
	user_dept_id	CHAR(7BYTE),
 	CONSTRAINT  pk_user_id PRIMARY KEY (user_id),
	CONSTRAINT fk_user_dept_id FOREIGN KEY (user_dept_id) references UserDepartment(user_dept_id)
);

insert into UserTable (user_id, user_name, user_gender, user_username, user_password, user_designation, user_cnic, user_hiredate, user_dept_id) values (1, 'Daniel Stevens', 'Male', 'dstevens0', '2BmQaZthn', 'Head of Department', '573-79-1487', '12-Feb-2006', 1);
insert into UserTable (user_id, user_name, user_gender, user_username, user_password, user_designation, user_cnic, user_hiredate, user_dept_id) values (2, 'Kimberly Larson', 'Female', 'klarson1', 'YAKufCerj', 'Director', '978-76-0878', '23-Aug-2007', 3);
insert into UserTable (user_id, user_name, user_gender, user_username, user_password, user_designation, user_cnic, user_hiredate, user_dept_id) values (3, 'Billy Hawkins', 'Male', 'bhawkins2', 'rfsS6XWvsu', 'Associate', '234-68-2354', '04-Apr-2009', 2);
insert into UserTable (user_id, user_name, user_gender, user_username, user_password, user_designation, user_cnic, user_hiredate, user_dept_id) values (4, 'Frank Snyder', 'Male', 'fsnyder3', 'ibYew0Fed', 'Operator', '891-12-7630', '26-Sep-2006', 4);
insert into UserTable (user_id, user_name, user_gender, user_username, user_password, user_designation, user_cnic, user_hiredate, user_dept_id) values (5, 'Alan Mcdonald', 'Male', 'amcdonald4', '52iB1ol', 'Director', '847-53-9914', '09-Mar-2010', 5);
insert into UserTable (user_id, user_name, user_gender, user_username, user_password, user_designation, user_cnic, user_hiredate, user_dept_id) values (6, 'Kathy Watkins', 'Female', 'kwatkins5', '7EaJFANC', 'Head of Department', '247-26-5555', '26-Sep-2005', 5);
insert into UserTable (user_id, user_name, user_gender, user_username, user_password, user_designation, user_cnic, user_hiredate, user_dept_id) values (7, 'Shawn Freeman', 'Male', 'sfreeman6', 'GytzsJkxaQs3', 'Director', '544-94-9254', '02-Jan-2008',5);
insert into UserTable (user_id, user_name, user_gender, user_username, user_password, user_designation, user_cnic, user_hiredate, user_dept_id) values (8, 'Brenda Andrews', 'Female', 'bandrews7', '6ErmWAvKl4n4', 'Senior Quality Engineer', '202-91-4083', '19-Apr-2006', 2);
insert into UserTable (user_id, user_name, user_gender, user_username, user_password, user_designation, user_cnic, user_hiredate, user_dept_id) values (9, 'Helen Ferguson', 'Female', 'hferguson8', 'CqqYKjjkG9mc', 'Head of Department', '717-71-5083', '28-Feb-2007', 4);
insert into UserTable (user_id, user_name, user_gender, user_username, user_password, user_designation, user_cnic, user_hiredate, user_dept_id) values (10, 'Jimmy Ramos', 'Male', 'jramos9', 'PX6eB8flZAK', 'Officer', '483-83-2883', '07-Feb-2010', 2);



--Items-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE Items
(
	item_id		CHAR(7BYTE)	default(0)		NOT NULL,
	item_name	VARCHAR2(30)	default('-'),
	item_description	VARCHAR2(150),
	price		NUMBER(8),
 	CONSTRAINT  pk_item_id PRIMARY KEY (item_id)
);

insert into Items (item_id, item_name, price, item_description) values (1, 'A4 White Sheets Pack', '1000', 'abc');

insert into Items (item_id, item_name, price, item_description) values (2, 'Calculator','3000', 'abc');

insert into Items (item_id, item_name, price, item_description) values (3, 'HB Pencil x12', '20', 'abc');

insert into Items (item_id, item_name, price, item_description) values (4, 'Retractable Wax Crayons', '700', 'abc');

insert into Items (item_id, item_name, price, item_description) values (5, 'Oil Pastels x16', '800', 'abc');

insert into Items (item_id, item_name, price, item_description) values (6, 'Ruler', '15', 'abc');

insert into Items (item_id, item_name, price, item_description) values (7, 'Eraser', '15', 'abc');

insert into Items (item_id, item_name, price, item_description) values (8, 'A4 Exercise Book', '70', 'abc');

insert into Items (item_id, item_name, price, item_description) values (9, '10-pocket flip file', '90', 'abc');

insert into Items (item_id, item_name, price, item_description) values (10, 'A4 Coloured Paper Pack', '2500', 'abc');




--Requisition-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


CREATE TABLE Requisition
(
	req_id			CHAR(7BYTE)	default(0)		NOT NULL,
	req_user_id		CHAR(7BYTE)	default(0)		NOT NULL,
	approved_by		CHAR(7BYTE)	default(0),
	CONSTRAINT pk_req_id 	PRIMARY KEY (req_id),
	CONSTRAINT fk_req_user_id FOREIGN KEY (req_user_id) references UserTable(user_id)
);

insert into Requisition (req_id, req_user_id, approved_by) values (1, 1, 1);

insert into Requisition (req_id, req_user_id, approved_by) values (2, 2, 2);

insert into Requisition (req_id, req_user_id, approved_by) values (3, 3, 6);

insert into Requisition (req_id, req_user_id, approved_by) values (4, 4, 7);

insert into Requisition (req_id, req_user_id, approved_by) values (5, 5, 1);

insert into Requisition (req_id, req_user_id, approved_by) values (6, 6, 2);

insert into Requisition (req_id, req_user_id, approved_by) values (7, 7, 6);

insert into Requisition (req_id, req_user_id, approved_by) values (8, 8, 7);

insert into Requisition (req_id, req_user_id, approved_by) values (9, 9, 1);

insert into Requisition (req_id, req_user_id, approved_by) values (10, 10, 2);



--RequisitionDescription--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE RequisitionDescription
(
	rd_item_id	CHAR(7BYTE)	default(0)		NOT NULL,
	rd_quantity	CHAR(7BYTE)	default(0),
	rd_id		CHAR(7BYTE)	default(0),	
	
	CONSTRAINT fk_rd_id FOREIGN KEY (rd_id) references Requisition(req_id),
	CONSTRAINT fk_rd_item_id FOREIGN KEY(rd_item_id) references Items (item_id)
);


insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (1, 4, 10);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (1, 7, 3);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (1, 8, 6);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (2, 10, 12);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (2, 4, 12);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (2, 3, 1);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (2, 1, 4);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (3, 6, 1);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (3, 9, 8);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (4, 10, 4);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (5, 5, 7);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (5, 3, 2);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (6, 8, 4);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (6, 2, 2);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (6, 5, 4);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (7, 10, 3);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (8, 10, 19);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (9, 2, 11);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (9, 3, 3);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (9, 4, 5);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (9, 5, 7);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (9, 6, 9);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (9, 7, 1);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (9, 8, 4);

insert into RequisitionDescription ( rd_id, rd_item_id, rd_quantity) values (10, 3, 19);



--Vendor-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE Vendor
(
	vendor_id		CHAR(7BYTE)	default(0)		NOT NULL,
	vendor_name		VARCHAR2(50)	default('-')	NOT NULL,
	vendor_address		VARCHAR2(30)	default('-'),
	CONSTRAINT  pk_vendor_id	PRIMARY KEY (vendor_id)
);

insert into Vendor (vendor_id, vendor_name, vendor_address) values (1, 'EAF Fine Home', '0 Crest Line Park');

insert into Vendor (vendor_id, vendor_name, vendor_address) values (2, 'Smythson Depot', '6720 Meadow Valley Hill');

insert into Vendor (vendor_id, vendor_name, vendor_address) values (3, 'Bowne and Co. Stationers', '0 Thackeray Place');




--Quotation-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE Quotation
(
	quotation_id			CHAR(7BYTE)	default(0)		NOT NULL,
	quotation_vendor_id		CHAR(7BYTE)	default(0)	,
	quotation_req_order		CHAR(7BYTE)	default(0)	,
	min_order			NUMBER(5),
	price				NUMBER(6),
	discount				NUMBER(3),
	CONSTRAINT  pk_quotation_id PRIMARY KEY (quotation_id), 
	CONSTRAINT fk_quotation_vendor_id FOREIGN KEY (quotation_vendor_id) references Vendor(vendor_id)
);

insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (1, 1, 1, 10, 2, 30);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (2, 2, 1, 20, 2, 25);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (3, 3, 1, 30, 2, 10);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (4, 1, 2, 40, 2, 100);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (5, 2, 2, 50, 2, 75);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (6, 3, 2, 60, 2, 50);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (7, 1, 3, 70, 2, 30);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (8, 2, 3, 80, 2, 20);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (9, 3, 3, 90, 2, 15);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (10, 1, 4, 100, 2, 35);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (11, 2, 4, 110, 2, 45);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (12, 3, 4, 120, 2, 80);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (13, 1, 5, 130, 2, 99);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (14, 2, 5, 140, 2, 30);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (15, 3, 5, 150, 2, 40);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (16, 1, 6, 160, 2, 45);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (17, 2, 6, 170, 2, 55);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (18, 3, 6, 180, 2, 60);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (19, 1, 7, 190, 2, 65);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (20, 2, 7, 200, 2, 70);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (21, 3, 7, 10, 2, 5);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (22, 1, 8, 20, 2, 16);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (23, 2, 8, 30, 2, 19);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (24, 3, 8, 40, 2, 10);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (25, 1, 9, 50, 2, 50);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (26, 2, 9, 30, 2, 75);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (27, 3, 9, 10, 2, 25);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (28, 1, 10, 110, 2, 40);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (29, 2, 10, 130, 2, 30);
insert into Quotation (quotation_id, quotation_vendor_id, quotation_req_order, min_order, price, discount) values (30, 3, 10, 160, 2, 35);






--Purchase Order-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE PurchaseOrder
(
	purchase_order_id		CHAR(7BYTE)	default(0)		NOT NULL,
	requisition_id		CHAR(7BYTE)	default(0),
	vendor_id		CHAR(7BYTE)	default(0),
	shippingaddress		VARCHAR2(30)	default('-'),
	date_generated		VARCHAR2(20),
	quotation_id		CHAR(7BYTE)	default(0),
 	CONSTRAINT  pk_purchase_order_id PRIMARY KEY (purchase_order_id),
	CONSTRAINT fk_requisition_id FOREIGN KEY (requisition_id) references Requisition(req_id),
	CONSTRAINT fk_quotation_id FOREIGN KEY (quotation_id) references Quotation(quotation_id)
);

insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values (1, 1, 1, '48 Manley Way', '05-Dec-2015', 22);

insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values (2, 2, 2, '78 Scott Plaza', '11-Sep-2015', 23);

insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values (3, 3, 3, '2 Northport Hill', '02-Oct-2015', 26);

insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values (4, 4, 1, '88 Melrose Center', '25-Apr-2015', 30);

insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values (5, 5, 3, '1848 Express Hill', '15-Sep-2015', 6);

insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values (6, 6, 2, '14 Judy Park', '24-Sep-2015', 22);

insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values (7, 7, 1, '488 3rd Avenue', '28-Mar-2016', 13);

insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values (8, 8, 2, '5241 Barnett Court', '09-Jan-2016', 26);

insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values (9, 9, 3, '9974 Farmco Street', '23-Oct-2015', 13);

insert into PurchaseOrder (purchase_order_id, requisition_id, vendor_id,shippingaddress, date_generated, quotation_id) values (10, 10, 1, '836 Cottonwood Point', '15-Jul-2015', 10);




--Purchase Order Description-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE PurchaseOrderDescription
(
	pod_order_id		CHAR(7BYTE)	default(0)		NOT NULL,
	pod_item_id		CHAR(7BYTE)	default(0)		NOT NULL,
	pod_quantity		NUMBER(7)	default(0)	,
	CONSTRAINT fk_pod_order_id FOREIGN KEY (pod_order_id) references PurchaseOrder(purchase_order_id),
	CONSTRAINT fk_pod_item_id FOREIGN KEY(pod_item_id) references Items (item_id)
);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (1, 4, 10);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (1, 7, 3);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (1, 8, 6);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (2, 10, 12);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (2, 4, 12);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (2, 3, 1);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (2, 1, 4);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (3, 6, 1);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (3, 9, 8);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (4, 10, 4);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (5, 5, 7);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (5, 3, 2);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (6, 8, 4);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (6, 2, 2);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (6, 5, 4);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (7, 10, 3);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (8, 10, 19);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (9, 2, 11);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (9, 3, 3);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (9, 4, 5);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (9, 5, 7);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (9, 6, 9);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (9, 7, 1);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (9, 8, 4);

insert into PurchaseOrderDescription ( pod_order_id, pod_item_id, pod_quantity) values (10, 3, 19);






--Invoice-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE Invoice
(
	invoice_id		CHAR(7BYTE)	default(0)		NOT NULL,
	invoice_purchaseorder	CHAR(7BYTE),
	invoice_date		VARCHAR2(20),
	invoice_shipto		VARCHAR2(50),
	invoice_billto		VARCHAR2(50),
	invoice_user_id		CHAR(7BYTE),
	invoice_vendorid		CHAR(7BYTE),
	invoice_total		NUMBER(15),
	invoice_totalquantity	NUMBER(5),
	CONSTRAINT pk_invoice_id	PRIMARY KEY (invoice_id),
	CONSTRAINT fk_invoice_purchaseorder FOREIGN KEY (invoice_purchaseorder) references PurchaseOrder(purchase_order_id),
	CONSTRAINT fk_invoice_vendorid FOREIGN KEY (invoice_vendorid) references Vendor (vendor_id)
	
);

insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid) values (1, 1, '05-Feb-2016', '05359 Susan Place', '05359 Susan Place', 1, 2);

insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid) values (2, 2, '19-Jun-2015', '75 Cody Pass', '75 Cody Pass', 2, 2);

insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid) values (3, 3, '04-Oct-2015', '4073 Main Avenue', '508 Harper Alley', 3, 1);

insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid) values (4, 4, '12-Oct-2015', '8233 Merrick Way', '8 2nd Junction', 4, 2);

insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid) values (5, 5, '06-Apr-2016', '4785 Hansons Place', '725 Starling Court', 5, 1);

insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid) values (6, 6, '21-Nov-2015', '30754 Gerald Hill', '74 Continental Point', 6, 3);

insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid) values (7, 7, '21-Mar-2016', '2981 Twin Pines Crossing', '9 Merrick Crossing', 7, 1);

insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid) values (8, 8, '15-Aug-2015', '051 Mccormick Crossing', '8639 Corscot Parkway', 8, 1);

insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid) values (9, 9, '21-Aug-2015', '90 Kennedy Way', '782 Leroy Avenue', 9, 2);

insert into Invoice (invoice_id, invoice_purchaseorder, invoice_date, invoice_shipto, invoice_billto, invoice_user_id, invoice_vendorid) values (10, 10, '31-Jul-2015', '81 Prairie Rose Hill', '7175 Petterle Pass', 10, 1);



 -- InvoiceDescription -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE InvoiceDescription 
(
	id_invoice_id		CHAR(7BYTE)	default(0)		NOT NULL,
	id_item_id		CHAR(7BYTE)	default(0),	
	id_item_quantity		CHAR(7BYTE)	default(0),
	CONSTRAINT fk_id_invoice_id FOREIGN KEY (id_invoice_id) references Invoice(invoice_id),
	CONSTRAINT fk_id_item_id FOREIGN KEY(id_item_id) references Items (item_id)
);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (1, 4, 10);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (1, 7, 3);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (1, 8, 6);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (2, 10, 12);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (2, 4, 12);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (2, 3, 1);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (2, 1, 4);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (3, 6, 1);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (3, 9, 8);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (4, 10, 4);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (5, 5, 7);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (5, 3, 2);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (6, 8, 4);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (6, 2, 2);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (6, 5, 4);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (7, 10, 3);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (8, 10, 19);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (9, 2, 11);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (9, 3, 3);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (9, 4, 5);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (9, 5, 7);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (9, 6, 9);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (9, 7, 1);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (9, 8, 4);

insert into InvoiceDescription ( id_invoice_id, id_item_id, id_item_quantity) values (10, 3, 19);






