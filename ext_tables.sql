#
# Table structure for table 'tx_jobs_domain_model_job'
#
CREATE TABLE tx_jobs_domain_model_job (

	title varchar(255) DEFAULT '' NOT NULL,
	teaser text,
	text text,
	image int(11) unsigned NOT NULL default '0',
	file int(11) unsigned DEFAULT '0' NOT NULL,
	date date DEFAULT NULL,
	contact int(11) unsigned DEFAULT '0' NOT NULL,
	field int(11) unsigned DEFAULT '0' NOT NULL,
	level int(11) unsigned DEFAULT '0' NOT NULL,
	location int(11) unsigned DEFAULT '0' NOT NULL,
	content int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_jobs_domain_model_contact'
#
CREATE TABLE tx_jobs_domain_model_contact (

	name varchar(255) DEFAULT '' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL,
	phone varchar(255) DEFAULT '' NOT NULL,
	fax varchar(255) DEFAULT '' NOT NULL,
	address varchar(255) DEFAULT '' NOT NULL,
	link varchar(255) DEFAULT '' NOT NULL,
	image int(11) unsigned NOT NULL default '0'

);

#
# Table structure for table 'tx_jobs_domain_model_location'
#
CREATE TABLE tx_jobs_domain_model_location (

	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	image int(11) unsigned NOT NULL default '0',
	lat varchar(255) DEFAULT '' NOT NULL,
	lng varchar(255) DEFAULT '' NOT NULL,
	address text

);

#
# Table structure for table 'tx_jobs_domain_model_field'
#
CREATE TABLE tx_jobs_domain_model_field (

	title varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_jobs_domain_model_level'
#
CREATE TABLE tx_jobs_domain_model_level (

	title varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_jobs_domain_model_content'
#
CREATE TABLE tx_jobs_domain_model_content (

	title varchar(255) DEFAULT '' NOT NULL,
	text text,
	file int(11) unsigned DEFAULT '0' NOT NULL,
	image int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_jobs_job_contact_mm'
#
CREATE TABLE tx_jobs_job_contact_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_jobs_job_field_mm'
#
CREATE TABLE tx_jobs_job_field_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_jobs_job_level_mm'
#
CREATE TABLE tx_jobs_job_level_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_jobs_job_location_mm'
#
CREATE TABLE tx_jobs_job_location_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_jobs_job_content_mm'
#
CREATE TABLE tx_jobs_job_content_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
