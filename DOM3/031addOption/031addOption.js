"use strict";

let select = genres.options[genres.selectedIndex];
alert(select.value);

let add = new Option('Classic', 'classic');
genres.append(add);

add.selected = true;