#
# Table structure for table 'tx_mocbeer_beer'
#
CREATE TABLE tx_mocbeer_beer (
  uid int(11) NOT NULL auto_increment,
  pid int(11) DEFAULT '0' NOT NULL,
  tstamp int(11) unsigned DEFAULT '0' NOT NULL,
  crdate int(11) unsigned DEFAULT '0' NOT NULL,
  cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
  editlock tinyint(4) unsigned DEFAULT '0' NOT NULL,
  deleted tinyint(3) unsigned DEFAULT '0' NOT NULL,
  hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
  starttime int(11) unsigned DEFAULT '0' NOT NULL,
  endtime int(11) unsigned DEFAULT '0' NOT NULL,
  fe_group varchar(100) DEFAULT '0' NOT NULL,
  name varchar(255) DEFAULT '' NOT NULL,
  alcohol_by_volume float(8,2) DEFAULT '0.00' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);