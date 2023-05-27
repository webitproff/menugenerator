Menu Generator
============

Plugin for [CMF Cotonti](https://www.cotonti.com) that enables main menu management by an unexperienced user without 
endangering the html-layout.

Authors: [esclkm](https://www.cotonti.com/users/esclkm), Kalnov Alexey <kalnovalexey@yandex.ru>, Cotonti Team

Plugin page:  
https://www.cotonti.com/extensions/administration-management/menu-generator

## Installation
- Unpack to your plugins folder
- Install the plugin in Administration panel
- Fill out the menu using the tools section: Administration panel → Extensions → Menu Generator → Administration
- Place tags in the templates

Menu edit example:
![menu-generator](https://github.com/Cotonti-Extensions/menugenerator/assets/1021886/b4efed59-57d1-485c-ae0e-b41938147c14)

## Tags

Tags for displaying menus in theme templates have the following format:
```	
{PHP.MENUGENERATOR.<PATH>}
```
For example, from the screenshot above, the bottom menu in the "footer" (footer.tpl)
```
{PHP.MENUGENERATOR.F}
```
And the side menu (in header.tpl):
```	
{PHP.MENUGENERATOR.LE}
```
All tags are global and accessible from any template.

## Templates

The menu can be customized using templates. Template names are formed according to the following principle:
```	
menugenerator.<general_or_path_root>.<level>.<path>.tpl
```
where:
- **general_or_path_root** (optional) - is word 'general' or root element.
- **level** (optional) - nesting level: level0, level1, etc.
- **path** (optional) - path

For example:

for the screenshot above, the menu template in the "footer" of the site will be in the `menugenerator.t.tpl`, and the side menu template is `menugenerator.le.tpl`, the first level menu template: `menugenerator.le.level1.tpl`

Single menu item can be designed in template: `menugenerator.le.level2.le.1.30.tpl`

## Additional (extra) fields

You can use additional fields to display additional information: description, icons, etc. Extrafields are also supported.

## Tags in menu templates

`{MENU_TITLE}` - menu item title  
`{MENU_HREF}` - link  
`{MENU_PATH}` - path (see menu filling)  
`{MENU_EXTRA}` - additional text field  
`{MENU_DESC}` - description  
`{MENU_ID}` - ID  
`{MENU_SUBMENU}` - submenu.
