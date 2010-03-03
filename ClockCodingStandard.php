<?php
/**
 * Clock Coding Standard.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   CVS: $Id: ClockCodingStandard.php 267648 2008-10-23 04:52:05Z squiz $
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * Clock Coding Standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 1.2.1
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_Standards_Clock_ClockCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{


    /**
     * Return a list of external sniffs to include with this standard.
     *
     * The Clock standard uses some PEAR sniffs.
     *
     * @return array
     */
    public function getIncludedSniffs()
    {
        return array(
                'Generic/Sniffs/Functions/OpeningFunctionBraceKernighanRitchieSniff.php',
                'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
        				'Generic/Sniffs/CodeAnalysis/UselessOverridingMethodSniff.php',
        				'Generic/Sniffs/ControlStructures/InlineControlStructureSniff.php',
        				'Generic/Sniffs/Metrics/CyclomaticComplexitySniff.php',
        				'Generic/Sniffs/Metrics/NestingLevelSniff.php',
        				'Generic/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php',
        				'Generic/Sniffs/PHP/LowerCaseConstantSniff.php',

        				'PEAR/Sniffs/Files/LineEndingsSniff.php',
                'PEAR/Sniffs/ControlStructures/ControlSignatureSniff.php',
                'PEAR/Sniffs/Functions/ValidDefaultValueSniff.php',

                'Squiz/Sniffs/Functions/GlobalFunctionSniff.php',
        				'Squiz/Sniffs/Arrays/ArrayBracketSpacingSniff.php',
        				'Squiz/Sniffs/WhiteSpace/OperatorSpacingSniff.php',
        				'Squiz/Sniffs/PHP/EvalSniff.php',
				        'Squiz/Sniffs/WhiteSpace/MemberVarSpacingSniff.php',
				        'Squiz/Sniffs/Strings/EchoedStringsSniff.php',
        				'Squiz/Sniffs/ControlStructures/ForEachLoopDeclarationSniff.php',
                //'Squiz/Sniffs/Functions/FunctionDeclarationArgumentSpacingSniff.php',
        				'Squiz/Sniffs/Operators/IncrementDecrementUsageSniff.php',
        				//'Squiz/Sniffs/WhiteSpace/LanguageConstructSpacingSniff.php',
        				'Zend/Sniffs/Files/ClosingTagSniff.php'
               );

    }//end getIncludedSniffs()


}//end class
?>
