# utils
Repository with usefull utilitys (Stored in json/php or just simple functions that are overall usefull)

Lists of data that are often used but not that often, smart written php class that is loadable via composer to use this kind of data.

Also some simple overal usefull functions which i need on a lot of my projects but not enough for their own repository.

The repo is build up in a simple way

src/data
     - json
     - php array/object
     - other data formats
src/utils
     utils.php
     - per direct function a folder
     

Do you need the data for usage? Just go in there and take it! I don't care it's all opensource :')
are you using the class / data? 

please contribute to the repo.


##Contributing:
Every one loves contributers, but yes there is a but: only when their contributes are usefull, to improve the flow of everything please use this example as dockblock header (of course with your own data)

	/**
	 *  Simple country display, only country codes and the names displayed
	 *  
	 * 	@group			countries
	 * 	@name			simple
	 * 	@type			php
	 * 	@date   		25-03-2015
	 * 	@author 		Matti van de Weem <mvdweem@gmail.com>
	 * 	@contributors :
	 */

And keep the same structure as the other files:

 - always return someting
 - make verry,verry,verry clear what is returning
 - keep it simple
 
####for a valid example check `src/data/countries/simple.php

 