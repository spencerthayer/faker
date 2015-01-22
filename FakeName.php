<?php
/**
 * FakeName.php
 * 2014-01-16
 *
 * Developed by yewei <yewei@playcrab.com>
 * Copyright (c) 2014 Playcrab Corp.
 *
 * Desc:
 */

class FakeName {

    /**
     * get random firstName
     * @return string
     */
    public static function firstName() {
        $options = array(
            'Aaron','Abbey','Abbie','Abbigail','Abby','Abdiel','Abdul','Abdullah','Abe','Abel','Abelardo','Abigail','Abigale','Abigayle','Adela','Adelbert','Adele','Adelia','Baby','Bailee','Bailey','Barbara','Barney','Baron','Barrett','Barry','Bart','Bartholome','Barton','Baylee','Beatrice','Beau','Beaulah','Bell','Bella','Belle','Ben','Benedict','Benjamin','Bennett','Bennie','Benny','Benton','Berenice','Bernadette','Bernadine','Bernard','Bernardo','Berneice','Bernhard','Bernice','Bernie','Berniece','Bernita','Berry','Blanche','Blaze','Bo','Bobbie','Bobby','Bonita','Bonnie','Boris','Boyd','Bridget','Bridgette','Bridie','Brielle','Brigitte','Brionna','Brisa','Britney','Brittany','Brock','Broderick','Brody','Brook','Brooke','Brooklyn','Brooks','Brown','Bruce','Caleigh','Cali','Calista','Callie','Camden','Cameron','Dagmar','Dahlia','Daija','Daisha','Daisy','Dakota','Dale','Dallas','Dallin','Dalton','Damaris','Dameon','Damian','Damien','Damion','Damon','Dan','Dana','Dandre','Dane','D\'angelo','Dangelo','Danial','Daniela','Daniella','Danielle','Danika','Dannie','Danny','Dante','Danyka','Daphne','Daphnee','Daphney','Darby','Daren','Earlene','Elinor','Elinore','Elisa','Elisabeth','Elise','Eliseo','Elisha','Elissa','Eliza','Elizabeth','Ella','Ellen','Ellie','Elliot','Elliott','Ellis','Ellsworth','Elmer','Elmira','Elmo','Elmore','Elna','Elnora','Elody','Eloisa','Eloise','Elouise','Eloy','Elroy','Elsa','Else','Elsie','Elta','Elton','Elva','Elvera','Elvie','Elvis','Elwin','Elwyn','Elyse','Elyssa','Elza','Emanuel','Emelia','Emelie','Emely','Emerald','Emerson','Emery','Emie','Emil','Estel','Estell','Estella','Estelle','Estevan','Esther','Estrella','Etha','Ethan','Ethel','Ethelyn','Ethyl','Ettie','Eudora','Eugene','Eugenia','Eula','Eulah','Eulalia','Euna','Eunice','Eusebio','Eva','Evalyn','Evan','Fabian','Fabiola','Fae','Fannie','Fanny','Fatima','Faustino','Fausto','Favian','Fay','Faye','Federico','Felicia','Felicita','Felicity','Felipa','Felipe','Felix','Felton','Fermin','Fern','Fernando','Ferne','Fidel','Filiberto','Filomena','Finn','Fiona','Flavie','Flavio','Fleta','Fletcher','Flo','Florence','Florencio','Florian','Florida','Florine','Flossie','Floy','Floyd','Ford','Forest','Forrest','Foster','Frances','Francesca','Francesco','Gabriel','Gabriella','Gabrielle','Gaetano','Gage','Gail','Gardner','Garett','Garfield','Garland','Garnet','Garnett','Garret','Garrett','Garrick','Garrison','Garry','Garth','Gaston','Gavin','Gay','Gayle','Gaylord','Gene','General','Genesis','Genevieve','Gennaro','Genoveva','Geo','Geoffrey','George','Georgette','Georgiana','Georgianna','Geovanni','Geovanny','Geovany','Gerald','Geraldine','Gerard','Gerardo','Gerda','Gerhard','Germaine','German','Gerry','Gerson','Gertrude','Gia','Gianni','Gideon','Gilbert','Gilberto','Gilda','Giles','Gillian','Hadley','Hailee','Hailey','Hailie','Hal','Haleigh','Haley','Halie','Halle','Hallie','Hank','Hanna','Hannah',
            'Hans','Hardy','Harley','Harmon','Harmony','Harold','Harrison','Harry','Harvey','Haskell','Hassan','Hassie','Hattie','Haven','Hayden','Haylee','Hayley','Haylie','Hazel','Hazle','Heath','Heather','Heaven','Heber','Hector','Heidi','Helen','Helena','Helene','Helga','Hellen','Helmer','Heloise','Henderson','Henri','Henriette','Henry','Ian','Ibrahim','Icie','Ida','Idell','Idella','Ignacio','Ignatius','Ike','Ila','Ilene','Iliana','Ima','Imani','Jabari','Jace','Jacey','Jacinthe','Jacinto','Jack','Jackeline','Jackie','Jacklyn','Jackson','Jacky','Jaclyn','Jacquelyn','Jacques','Jacynthe','Jada','Jade','Jaden','Jadon','Jadyn','Jaeden','Jaida','Jaiden','Jailyn','Kacey','Kaci','Kacie','Kade','Kaden','Kadin','Kaela','Kaelyn','Kaia','Kailee','Kailey','Kailyn','Kaitlin','Kaitlyn','Kale','Kaleb','Kaleigh','Kaley','Kali','Kallie','Kameron','Kamille','Kamren','Kamron','Kamryn','Kane','Lacey','Lacy','Ladarius','Lafayette','Laila','Laisha','Lamar','Lambert','Lamont','Lance','Landen','Lane','Laney','Larissa','Laron','Larry','Larue','Laura','Laurel','Lauren','Laurence','Lauretta','Lauriane','Laurianne','Laurie','Laurine','Laury','Lauryn','Lavada','Lavern','Laverna','Laverne','Lavina','Lavinia','Lavon','Lavonne','Lawrence','Lawson','Layla','Layne','Lazaro','Lea','Leann','Leanna','Leanne','Leatha','Leda','Lee','Leif','Mabel','Mabelle','Mable','Mac','Macey','Maci','Macie','Mack','Mackenzie','Macy','Madaline','Madalyn','Maddison','Madeline','Madelyn','Madelynn','Madge','Madie','Madilyn','Madisen','Madison','Madisyn','Madonna','Madyson','Mae','Maegan','Maeve','Mafalda','Magali','Magdalen','Magdalena','Maggie','Magnolia','Magnus','Maia','Maida','Maiya','Major','Makayla','Makenna','Makenzie','Malachi','Malcolm','Malika','Malinda','Mallie','Mallory','Malvina','Mandy','Manley','Manuel','Manuela','Mara','Marc','Marcel','Marcelina','Marcelino','Marcella','Marcelle','Marcellus','Marcelo','Marcia','Marco','Marcos','Marcus','Margaret','Margarete','Margarett','Margaretta','Margarette','Margarita','Marge','Margie','Margot','Margret','Marguerite','Maria','Mariah','Mariam','Marian','Mariana','Mariane','Marianna','Marianne','Mariano','Maribel','Marie','Mariela','Marielle','Marietta','Marilie','Marilou','Marilyne','Marina','Mario','Marion','Marisa','Marisol','Maritza','Marjolaine','Marjorie','Marjory','Mark','Markus','Marlee','Marlen','Marlene','Marley','Marlin','Marlon','Marques','Marquis','Marquise','Marshall','Marta','Martin','Martina','Martine','Marty','Marvin','Mary','Maryam','Maryjane','Maryse','Mason','Mateo','Mathew','Mathias',
            'Mathilde','Matilda','Matilde','Matt','Matteo','Mattie','Maud','Maude','Maudie','Maureen','Maurice','Mauricio','Maurine','Maverick','Mavis','Max','Maxie','Maxime','Maximilian','Maximillia','Maximillian','Maximo','Maximus','Maxine','Maxwell','May','Maya','Maybell','Maybelle','Maye','Maymie','Maynard','Mayra','Mazie','Mckayla','Mckenna','Mckenzie','Meagan','Meaghan','Meda','Megane','Meggie','Meghan','Mekhi','Melany','Melba','Melisa','Melissa','Mellie','Melody','Melvin','Melvina','Melyna','Melyssa','Mercedes','Meredith','Merl','Merle','Merlin','Merritt','Mertie','Mervin','Meta','Mia','Micaela','Micah','Michael','Michaela','Michale','Micheal','Michel','Michele','Michelle','Miguel','Mikayla','Mike','Mikel','Milan','Miles','Milford','Miller','Millie','Milo','Milton','Mina','Minerva','Minnie','Miracle','Mireille','Mireya','Misael','Missouri','Misty','Mitchel','Mitchell','Mittie','Modesta','Modesto','Mohamed','Mohammad','Mohammed','Moises','Mollie','Molly','Mona','Monica','Monique','Monroe','Monserrat','Monserrate','Montana','Monte','Monty','Morgan','Moriah','Morris','Mortimer','Morton','Mose','Moses','Moshe','Mossie','Mozell','Mozelle','Muhammad','Muriel','Murl','Murphy','Murray','Mustafa','Mya','Myah','Mylene','Myles','Myra','Myriam','Myrl','Myrna','Myron','Myrtice','Myrtie','Myrtis','Myrtle','Nadia','Nakia','Name','Nannie','Naomi','Naomie','Napoleon','Narciso','Nash','Nasir','Nat','Natalia','Natalie','Natasha','Nathan','Nathanael','Nathanial','Nathaniel','Nathen','Nayeli','Neal','Ned','Nedra','Neha','Neil','Nelda','Nella','Nelle','Nellie','Nels','Nelson','Neoma','Nestor','Nettie','Neva','Newell','Newton','Nia','Nicholas','Nicholaus','Nichole','Nick','Nicklaus','Nickolas','Nico','Nicola','Nicolas','Nicole','Nicolette','Nigel','Nikita','Nikki','Nikko','Niko','Nikolas','Nils','Nina','Noah','Noble','Noe','Noel','Noelia','Noemi','Noemie','Noemy','Nola','Nolan','Nona','Nora','Norbert','Norberto','Norene','Norma','Norris','Norval','Norwood','Nova','Novella','Nya','Nyah','Nyasia','Obie','Oceane','Ocie','Octavia','Oda','Odell','Odessa','Odie','Ofelia','Queen','Queenie','Quentin','Quincy','Quinn','Quinten','Quinton','Rachael','Rachel','Rachelle','Rae','Raegan','Rafael','Rafaela','Raheem',
            'Rahsaan','Rahul','Raina','Raleigh','Ralph','Ramiro','Ramon','Ramona','Randal','Randall','Randi','Randy','Ransom','Raoul','Raphael','Raphaelle','Raquel','Rashad','Rashawn','Rasheed','Raul','Raven','Ray','Raymond','Raymundo','Reagan','Reanna','Reba','Rebeca','Rebecca','Rebeka','Rebekah','Reece','Reed','Reese','Regan','Reggie','Reginald','Reid','Reilly','Reina','Reinhold','Remington','Rene','Renee','Ressie','Reta','Retha','Retta','Reuben','Reva','Rex','Rey','Reyes','Reymundo','Reyna','Reynold','Rhea','Rhett','Rhianna','Xavier','Xzavier','Yadira','Yasmeen','Yasmin','Yasmine','Yazmin','Yesenia','Yessenia','Yolanda','Yoshiko','Yvette','Yvonne','Zachariah','Zachary','Zachery','Zack','Zackary','Zackery','Zakary','Zander','Zane','Zaria','Zechariah','Zelda','Zella','Zelma','Zena','Zetta','Zion','Zita','Zoe','Zoey','Zoie','Zoila','Zola','Zora','Zula');

        return $options[array_rand($options)];
    }

    /**
     * get random lastName
     * @return string
     */
    public static function lastName() {
        $options = array(
            'Larkin','Larson','Leannon','Lebsack','Ledner','Leffler','Legros','Lehner','Lemke','Lesch','Leuschke','Lind','Lindgren','Littel','Little','Lockman','Lowe','Lubowitz','Lueilwitz','Luettgen','Lynch','Macejkovic','Maggio','Mann','Mante','Marks','Marquardt','Marvin','Mayer','Mayert','McClure','McCullough','McDermott','McGlynn','McKenzie','McLaughlin','Medhurst','Mertz','Metz','Miller','Mills','Mitchell','Moen','Mohr','Monahan','Moore','Morar','Morissette','Mosciski','Mraz','Mueller','Muller','Murazik','Murphy','Murray','Nader','Nicolas','Nienow','Nikolaus','Nitzsche','Nolan','Oberbrunner','O\'Connell','O\'Conner','O\'Hara','O\'Keefe','O\'Kon','Okuneva','Olson','Ondricka','O\'Reilly','Orn','Ortiz','Osinski','Pacocha','Padberg','Pagac','Parisian','Parker','Paucek','Pfannerstill','Pfeffer','Pollich','Pouros','Powlowski','Predovic','Price','Prohaska','Prosacco','Purdy','Quigley','Quitzon','Rath','Ratke','Rau','Raynor','Reichel','Reichert','Reilly','Reinger','Rempel','Renner','Reynolds','Rice','Rippin','Ritchie','Robel','Roberts','Rodriguez','Rogahn','Rohan','Rolfson','Romaguera','Roob','Rosenbaum','Rowe','Ruecker','Runolfsdottir','Runolfsson','Runte','Russel','Rutherford','Ryan','Sanford','Satterfield','Sauer','Sawayn','Schaden','Schaefer','Schamberger','Schiller','Schimmel','Schinner','Schmeler','Schmidt','Schmitt','Schneider','Schoen','Schowalter','Schroeder','Schulist','Schultz','Schumm','Schuppe','Schuster','Senger','Shanahan','Shields','Simonis','Sipes','Skiles','Smith','Smitham','Spencer','Spinka','Sporer','Stamm','Stanton','Stark','Stehr','Steuber','Stiedemann','Stokes','Stoltenberg','Stracke','Streich','Stroman','Strosin','Swaniawski','Swift','Terry','Thiel','Thompson','Tillman','Torp','Torphy','Towne','Toy','Trantow','Tremblay','Treutel','Tromp','Turcotte','Turner','Ullrich','Upton','Vandervort','Veum','Volkman','Von','VonRueden','Waelchi','Walker','Walsh','Walter','Ward','Waters','Watsica','Weber','Wehner','Weimann','Weissnat','Welch','West','White','Wiegand','Wilderman','Wilkinson','Will','Williamson','Willms','Windler','Wintheiser','Wisoky','Wisozk','Witting','Wiza','Wolf','Wolff','Wuckert','Wunsch','Wyman','Yost','Yundt','Zboncak','Zemlak','Ziemann','Zieme','Zulauf');

        return $options[array_rand($options)];
    }

    /**
     * get random country
     * @return string
     */
    public static function countryName() {
        $options = array(
            'Andorra', 'United Arab Emirates', 'Afghanistan', 'Antigua and Barbuda', 'Anguilla', 'Albania', 'Armenia', 'Netherlands Antilles', 'Angola', 'Antarctica', 'Argentina', 'American Samoa', 'Austria', 'Australia', 'Aruba', 'Åland Islands', 'Azerbaijan', 'Bosnia and Herzegovina', 'Barbados', 'Bangladesh', 'Belgium', 'Burkina Faso', 'Bulgaria', 'Bahrain', 'Burundi', 'Benin', 'Saint Barthélemy', 'Bermuda', 'Brunei', 'Bolivia', 'British Antarctic Territory', 'Brazil', 'Bahamas', 'Bhutan', 'Bouvet Island', 'Botswana', 'Belarus', 'Belize', 'Canada', 'Cocos [Keeling] Islands', 'Congo - Kinshasa', 'Central African Republic', 'Congo - Brazzaville', 'Switzerland', 'Côte d’Ivoire', 'Cook Islands', 'Chile', 'Cameroon', 'China', 'Colombia', 'Costa Rica', 'Serbia and Montenegro', 'Canton and Enderbury Islands', 'Cuba', 'Cape Verde', 'Christmas Island', 'Cyprus', 'Czech Republic', 'East Germany', 'Germany', 'Djibouti', 'Denmark', 'Dominica', 'Dominican Republic', 'Algeria', 'Ecuador', 'Estonia', 'Egypt', 'Western Sahara', 'Eritrea', 'Spain', 'Ethiopia', 'Finland', 'Fiji', 'Falkland Islands', 'Micronesia', 'Faroe Islands', 'French Southern and Antarctic Territories', 'France', 'Metropolitan France', 'Gabon', 'United Kingdom', 'Grenada', 'Georgia', 'French Guiana', 'Guernsey', 'Ghana', 'Gibraltar', 'Greenland', 'Gambia', 'Guinea', 'Guadeloupe', 'Equatorial Guinea', 'Greece', 'South Georgia and the South Sandwich Islands', 'Guatemala', 'Guam', 'Guinea-Bissau', 'Guyana', 'Hong Kong SAR China', 'Heard Island and McDonald Islands', 'Honduras', 'Croatia', 'Haiti', 'Hungary', 'Indonesia', 'Ireland', 'Israel', 'Isle of Man', 'India', 'British Indian Ocean Territory', 'Iraq', 'Iran', 'Iceland', 'Italy', 'Jersey', 'Jamaica', 'Jordan', 'Japan', 'Johnston Island', 'Kenya', 'Kyrgyzstan', 'Cambodia', 'Kiribati', 'Comoros', 'Saint Kitts and Nevis', 'North Korea', 'South Korea', 'Kuwait', 'Cayman Islands', 'Kazakhstan', 'Laos', 'Lebanon', 'Saint Lucia', 'Liechtenstein', 'Sri Lanka', 'Liberia', 'Lesotho', 'Lithuania', 'Luxembourg', 'Latvia', 'Libya', 'Morocco', 'Monaco', 'Moldova', 'Montenegro', 'Saint Martin', 'Madagascar', 'Marshall Islands', 'Midway Islands', 'Macedonia', 'Mali', 'Myanmar [Burma]', 'Mongolia', 'Macau SAR China', 'Northern Mariana Islands', 'Martinique', 'Mauritania', 'Montserrat', 'Malta', 'Mauritius', 'Maldives', 'Malawi', 'Mexico', 'Malaysia', 'Mozambique', 'Namibia', 'New Caledonia', 'Niger', 'Norfolk Island', 'Nigeria', 'Nicaragua', 'Netherlands', 'Norway', 'Nepal', 'Dronning Maud Land', 'Nauru', 'Neutral Zone', 'Niue', 'New Zealand', 'Oman', 'Panama', 'Pacific Islands Trust Territory', 'Peru', 'French Polynesia', 'Papua New Guinea', 'Philippines', 'Pakistan', 'Poland', 'Saint Pierre and Miquelon', 'Pitcairn Islands', 'Puerto Rico', 'Palestinian Territories', 'Portugal', 'U.S. Miscellaneous Pacific Islands', 'Palau', 'Paraguay', 'Panama Canal Zone', 'Qatar', 'Réunion', 'Romania', 'Serbia', 'Russia', 'Rwanda', 'Saudi Arabia', 'Solomon Islands', 'Seychelles', 'Sudan', 'Sweden', 'Singapore', 'Saint Helena', 'Slovenia', 'Svalbard and Jan Mayen', 'Slovakia', 'Sierra Leone', 'San Marino', 'Senegal', 'Somalia', 'Suriname', 'São Tomé and Príncipe', 'Union of Soviet Socialist Republics', 'El Salvador', 'Syria', 'Swaziland', 'Turks and Caicos Islands', 'Chad', 'French Southern Territories', 'Togo', 'Thailand', 'Tajikistan', 'Tokelau', 'Timor-Leste', 'Turkmenistan', 'Tunisia', 'Tonga', 'Turkey', 'Trinidad and Tobago', 'Tuvalu', 'Taiwan', 'Tanzania', 'Ukraine', 'Uganda', 'U.S. Minor Outlying Islands', 'United States', 'Uruguay', 'Uzbekistan', 'Vatican City', 'Saint Vincent and the Grenadines', 'North Vietnam', 'Venezuela', 'British Virgin Islands', 'U.S. Virgin Islands', 'Vietnam', 'Vanuatu', 'Wallis and Futuna', 'Wake Island', 'Samoa', 'Yemen', 'Mayotte', 'South Africa', 'Zambia', 'Zimbabwe', 'Unknown or Invalid Region');

        return $options[array_rand($options)];
    }
}
