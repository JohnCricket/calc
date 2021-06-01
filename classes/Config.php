<?php

interface Config
{
  /* DOMAIN AND MAIN TITLE CONSTANTS */
  const DOMAIN_NAME = "https://bamboolinux.com.br";
  const DOMAIN_DIR = "bamboolinux";
  const DOMAIN_TITLE = "Bamboolinux";
  const DOMAIN_SUBTITLE = "Mais uma Distro";
  const ADMIN_CMS = "CRUD";
  const CMS_TITLE = "O CMS de todo dia";
  const DOC_ROOT = "/var/www/html";
  /* LOCAL DBASE AND LOGIN CONSTANTS */
  const DBASE_LOCAL_HOST = "127.0.0.1";
  const DBASE_LOCAL_NAME = "jc_bamboolinux";
  const DBASE_LOCAL_USER = "johnny";
  const DBASE_LOCAL_PASS = "$/linux/^";
  /* REMOTE DBASE AND LOGIN CONSTANTS */
  const DBASE_REMOTE_HOST = "127.0.0.1";
  const DBASE_REMOTE_NAME = "bambooli_jc_bamboolinux";
  const DBASE_REMOTE_USER = "bambooli";
  const DBASE_REMOTE_PASS = "$/linux/^";
}
