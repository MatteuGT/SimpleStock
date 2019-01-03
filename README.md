# SimpleStock
### Made with &hearts; by GrowStocks Development
![Status](https://img.shields.io/badge/Status-BETA-blue.svg?style=for-the-badge&logo=appveyor)
![Issues](https://img.shields.io/github/issues/MatteuGT/SimpleStock.svg?style=for-the-badge&logo=appveyor)
![License](https://img.shields.io/github/license/MatteuGT/SimpleStock.svg?style=for-the-badge&logo=appveyor)<br>
[![Build Status](https://travis-ci.org/MatteuGT/SimpleStock.svg?branch=master)](https://travis-ci.org/MatteuGT/SimpleStock)

Proprietary PHP Plugin for GrowStocks now OPEN-SOURCED!

## Requirements
* PHP 7.1+
* Text Editor (Prefferably VSCode or Sublime Text)
* localhost
* a database with the required columns (see below) [MySQL]

## What is SimpleStock?
It is <a href="https://www.growstocks.ga">GrowStock's</a> proprietary plugin to make their website, it let's their developers do less code and make the most out of the function, hence the name SimpleStock. It's basically a library of commands that the developers use in their website pages, now we decided to make it open source so everyone can contribute to the project!

## Terms of Use
If you do want to use this library in your websites, webapps and apps, please do keep these points in mind:
* You can use the plugins as much as you want to, but do credit GrowStocks for the plugins used.

## How to use
Well we are still working on the functions needed but here are the first steps on making the plugins work.

#### 1. Database creation
Make sure that you make a MySQL database (via phpMyAdmin) with the following columns:

| rowID | ID | itemName | itemQty | itemWls | itemRate | itemStatus | itemDemand |
| ----- | -- | -------- | ------- | ------- | -------- | ---------- | ---------- |
|   01  | 0  | Blank    | 0       | 0       | NULL     | UNDEF      |  UNDEF     |
