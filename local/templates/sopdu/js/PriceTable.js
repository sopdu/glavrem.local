'use strict';

if (typeof Object.assign != 'function') {
  Object.defineProperty(Object, "assign", {
    value: function assign(target, varArgs) {
      if (target == null) {
        throw new TypeError('Cannot convert undefined or null to object');
      }
      var to = Object(target);
      for (var index = 1; index < arguments.length; index++) {
        var nextSource = arguments[index];
        if (nextSource != null) { 
          for (var nextKey in nextSource) {
            if (Object.prototype.hasOwnProperty.call(nextSource, nextKey)) {
              to[nextKey] = nextSource[nextKey];
            }
          }
        }
      }
      return to;
    },
    writable: true,
    configurable: true
  });
}

/**
 * Базовый класс
 * @property {Object} settings Настройки по умолчанию 
 * @property {String} settings.displaySelector Место вывода таблицы
 * @property {String} settings.tableClassName Имя класса таблицы
 * @property {String} settings.firstThName Название первой колонки таблицы
 * @property {String} settings.monetaryUnit Денежная единица
 * @property {Number} settings.multiplySum Число умножения суммы всех значений в строке и вывода в последней ячейке
 * @returns {Table}
 */
function Table() {
    this.settings = {
        displaySelector: '.price-service',
        tableClassName: '',
        firstThName: '',
        monetaryUnit: 'р.',
        multiplySum: 0
    };
}

Table.prototype.init = function(userSettings) {
    this.custom(userSettings);
    document.querySelector(this.settings.displaySelector).appendChild(this.heading());
    document.querySelector(this.settings.displaySelector).appendChild(this.render());
    
};

Table.prototype.custom = function(userSettings) {
    Object.assign(this.settings, userSettings);
};

/**
 * Формирование таблицы
 * @param {String} name_table Заголовок
 * @param {Object[]} column_title Контент для thead
 * @param {Object[]} price_list Контент для tbody
 * @returns {PriceTable}
 */
function PriceTable(name_table, column_title, price_list) {
    Table.call(this);
    this.name = name_table;
    this.title = column_title;
    this.price = price_list;
}
PriceTable.prototype = Object.create(Table.prototype); 
PriceTable.prototype.constructor = PriceTable;

PriceTable.prototype.render = function() {   
    var div = document.createElement('div');
    div.classList.add('table-responsive');
    div.appendChild(this.complete());
    return div;
};

PriceTable.prototype.complete = function() {
    var table = document.createElement('table');
    table.className = this.settings.tableClassName;
    
    var thead = document.createElement('thead');
    var th = new PriceTableRow(this.settings.firstThName, this.title, this.title.length, 'th');
    th.custom(this.settings);
    
    var tbody = document.createElement('tbody');
    for (var i in this.price){
        var row = new PriceTableRow(this.price[i].name, this.price[i].price, this.title.length, 'td'); 
        row.custom(this.settings);
        tbody.appendChild(row.render());
    }
    table.appendChild(thead).appendChild(th.render());
    table.appendChild(tbody);
    return table;
};

PriceTable.prototype.heading = function() {
    var title = document.createElement('h3');
    title.classList.add('h4');
    title.innerHTML = this.name;
    return title;
};

/**
 * Формирование строки таблицы
 * @param {String} row_name Наименование, выводится в первой ячейке
 * @param {Object[]} row_price Контент остальных ячеек
 * @param {Number} row_count Количество ячеек
 * @param {String} row_wrap Тег для ячейек
 * @returns {PriceTableRow}
 */
function PriceTableRow(row_name, row_price, row_count, row_wrap) {
    Table.call(this);
    this.name = row_name;
    this.content = row_price;
    this.count = row_count;
    this.wrap = row_wrap;
}
PriceTableRow.prototype = Object.create(Table.prototype); 
PriceTableRow.prototype.constructor = PriceTableRow;

PriceTableRow.prototype.render = function() {
    var row = document.createElement('tr');
    for (var i = 0; i <= this.count; i++) {
        var td_row = document.createElement(this.wrap);
        row.appendChild(td_row);
    }
    row.childNodes[0].innerHTML = this.name;
    for (var i = 0; i < this.content.length; i++) {
        row.childNodes[i+1].innerHTML = this.content[i];
        if (this.wrap == 'td') {
            row.childNodes[i+1].innerHTML += ' ' + this.settings.monetaryUnit;
        }
    }
    if (this.settings.multiplySum > 0 && this.wrap == 'td') {
        var result = 0;
        for (var i = 0; i < this.content.length; i++) {
            result += this.content[i];
        }
        row.lastChild.innerHTML = result * this.settings.multiplySum + ' ' + this.settings.monetaryUnit;;
    }
    return row;
};