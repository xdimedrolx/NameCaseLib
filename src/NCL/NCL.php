<?php
/**
 * @license Dual licensed under the MIT or GPL Version 2 licenses.
 * @package NameCaseLib
 */

namespace NCL\NCL;

/**
 * Класс, который содержит основные константы библиотеки:
 * - индексы мужского и женского пола
 * - индексы всех падежей
 *
 * @author Андрей Чайка <bymer3@gmail.com>
 * @version 0.4.1
 * @package NameCaseLib
 */
class NCL
{
    /**
     * Мужской пол
     * @static integer
     */
    public static $MAN = 1;

    /**
     * Женский пол
     * @static integer
     */
    public static $WOMAN = 2;

    /**
     * Именительный падеж
     * @static integer
     */
    public static $IMENITLN = 0;
    
    /**
     * Родительный падеж
     * @static integer
     */
    public static $RODITLN = 1;
    
    /**
     * Дательный падеж
     * @static integer
     */
    public static $DATELN = 2;
    
    /**
     * Винительный падеж
     * @static integer
     */
    public static $VINITELN = 3;
    
    /**
     * Творительный падеж
     * @static integer
     */
    public static $TVORITELN = 4;
    
    /**
     * Предложный падеж
     * @static integer
     */
    public static $PREDLOGN = 5;
    
    /**
     * Назвиний відмінок
     * @static integer
     */
    public static $UaNazyvnyi = 0;
    
    /**
     * Родовий відмінок
     * @static integer
     */
    public static $UaRodovyi = 1;
    
    /**
     * Давальний відмінок
     * @static integer
     */
    public static $UaDavalnyi = 2;
    
    /**
     * Знахідний відмінок
     * @static integer
     */
    public static $UaZnahidnyi = 3;
    
    /**
     * Орудний відмінок
     * @static integer
     */
    public static $UaOrudnyi = 4;
    
    /**
     * Місцевий відмінок
     * @static integer
     */
    public static $UaMiszevyi = 5;
    
    /**
     * Кличний відмінок
     * @static integer
     */
    public static $UaKlychnyi = 6;
}
