CREATE TABLE Admin (
    AdminPassword INT PRIMARY KEY,
    AdminL_name VARCHAR(255) NOT NULL,
    AdminF_name VARCHAR(50) NOT NULL,
    Admin_ID VARCHAR(50) NOT NULL,
    Confirms VARCHAR(50) NOT NULL,
    Checks VARCHAR(50) NOT NULL,
);

CREATE TABLE Customer (
    Guset_number INT PRIMARY KEY,
    Guest_address VARCHAR(255),
    GuestL_name VARCHAR(50) NOT NULL,
    GuestF_name VARCHAR(50) NOT NULL
    Guset_ID VARCHAR(50) NOT NULL,
    Creates VARCHAR(50) NOT NULL,
);

CREATE TABLE Room (
    Room_type INT PRIMARY KEY,
    Attribute VARCHAR(100) NOT NULL,
    Room_type INT NOT NULL,
    has VARCHAR(50) NOT NULL,
);

CREATE TABLE Room_type (
    Room_name INT PRIMARY KEY,
    Romm_code VARCHAR(100) NOT NULL,
    Room_floor (50) NOT NULL,
);

CREATE TABLE Transaction (
    Guset_ID INT PRIMARY KEY,
    Start_data DATE NOT NULL,
    End_data DATE NOT NULL,
    Total_payment DECIMAL(10, 2) NOT NULL,
    Payment_type VARCHAR(20) NOT NULL,
    has VARCHAR(50) NOT NULL,
);
  
CREATE TABLE Payment_type ( 
    Creadit INT PRIMARY KEY,
    Cash  VARCHAR(50) NOT NULL,
);
     