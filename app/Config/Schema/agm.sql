DROP TABLE IF EXISTS media;
DROP TABLE IF EXISTS properties;
DROP TABLE IF EXISTS properties_billings;
DROP TABLE IF EXISTS bpn_certificates;
DROP TABLE IF EXISTS bpn_certificate_histories;
DROP TABLE IF EXISTS pbb_taxes;
DROP TABLE IF EXISTS pbb_taxes_year;
DROP TABLE IF EXISTS notaries;
DROP TABLE IF EXISTS sale_deeds;
DROP TABLE IF EXISTS vehicles;

CREATE TABLE media (
    id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL, -- E.g. PROPERTIES-201 (Medias belong to Properties table ID 201)
    description MEDIUMTEXT, 
    file_path VARCHAR(255) NOT NULL,
    order_num INTEGER(10) UNSIGNED,
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (id)
);

CREATE TABLE properties (
    id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description MEDIUMTEXT, 
    parent_property_id INTEGER(10) UNSIGNED,
    loc_long DECIMAL,
    loc_lat DECIMAL,
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (id)
);

CREATE TABLE properties_billings (
    id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    billing_type VARCHAR(20) NOT NULL, -- TELKOM, PLN, FIRSTMEDIA, INDOVISION, LINGKUNGAN, KEBERSIHAN
    customer_num VARCHAR(100),
    period VARCHAR(10), -- MONTHLY, YEARLY, WEEKLY, DAILY
    description MEDIUMTEXT,
    property_id INTEGER(10) UNSIGNED,
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (id)
);

-- CREATE TABLE properties_billings_transactions (
-- );

CREATE TABLE bpn_certificates (
    id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    cert_num INTEGER(10) UNSIGNED NOT NULL,
    cert_num_full VARCHAR(50),
    province VARCHAR(50) NOT NULL,
    regency VARCHAR(50) NOT NULL,
    district VARCHAR(50) NOT NULL,
    village VARCHAR(50) NOT NULL,
    ownership_type VARCHAR(20) NOT NULL, -- HAK_MILIK, HAK_GUNA_BANGUNAN, HAK_GUNA_USAHA, HAK_PAKAI, HAK_MILIK_SARUSUN
    area INTEGER(10) UNSIGNED NOT NULL, -- in m^2
    owner_name VARCHAR(255) NOT NULL,
    property_id INTEGER(10) UNSIGNED,
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (id),
    INDEX cert_num (cert_num),
    INDEX cert_num_full (cert_num_full)
);

CREATE TABLE bpn_certificate_histories (
    id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    bpn_certificate_id INTEGER(10) UNSIGNED NOT NULL,
    event_date DATE,
    event_type VARCHAR(50),
    description MEDIUMTEXT,
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (id),
    INDEX bpn_certificate_id (bpn_certificate_id)
);

CREATE TABLE pbb_taxes (
    id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    tax_object_num VARCHAR(100) NOT NULL,
    land_area INTEGER(10) UNSIGNED NOT NULL,
    building_area INTEGER(10) UNSIGNED,
    owner_name VARCHAR(100),
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (id)
);

CREATE TABLE pbb_taxes_year (
    id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    pbb_tax_id INTEGER(10) UNSIGNED NOT NULL,
    year TINYINT NOT NULL,
    bill_amount INTEGER(10) UNSIGNED NOT NULL,
    is_paid BIT,
    paid_date DATE,
    paid_amount INTEGER(10) UNSIGNED,
    njop_amount INTEGER(10) UNSIGNED,
    bill_last_date DATE,
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (id),
    INDEX pbb_tax_id (pbb_tax_id)
);


CREATE TABLE notaries (
    id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    notary_name VARCHAR(200) NOT NULL,
    address VARCHAR(255),
    phone VARCHAR(100),
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (id)
);

CREATE TABLE sale_deeds (
    id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    bpn_sertifikat_id INTEGER(10) NOT NULL,
    doc_num VARCHAR(50) NOT NULL,
    sale_date DATE,
    sale_value INT(10) UNSIGNED,
    seller_name VARCHAR(100),
    buyer_name VARCHAR(100),
    notary_id INTEGER(10) UNSIGNED NOT NULL,
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (id),
    INDEX bpn_sertifikat_id (bpn_sertifikat_id),
    INDEX notary_id (notary_id)
);

CREATE TABLE vehicles (
    id INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    plate_num VARCHAR(50) NOT NULL,
    make VARCHAR(50),
    model VARCHAR(50),
    year SMALLINT,
    purchase_date DATE,
    sell_date DATE,
    purchase_price DECIMAL,
    sell_price DECIMAL,
    vin VARCHAR(100),
    chassis_num VARCHAR(200),
    engine_num VARCHAR(200),
    has_bpkb BIT,
    has_stnk BIT,
    has_spare_key BIT,
    has_faktur BIT,
    bpkb_num VARCHAR(100),
    owner_name VARCHAR(200),
    created DATETIME,
    modified DATETIME,
    PRIMARY KEY (id),
    UNIQUE INDEX plate_num (plate_num),
    UNIQUE INDEX bpkb_num (bpkb_num)
);

