<?php
/**
 *
 * User: yiqing
 * Date: 13-2-9
 * Time: 上午12:56
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * -------------------------------------------------------
 */
class DwzActiveForm extends CActiveForm
{

    /**
     * @var array
     *   required| remote |  email | url | date|  dateISO| number| digits| creditcard|
     *  equalTo|   maxlength|   minlength|  rangelength|   range|  max|   min|
     */
    public static $mapToYiiValidators = array(
        'required' => 'CRequiredValidator',
        'filter' => 'CFilterValidator',
        'match' => 'CRegularExpressionValidator',
        'email' => 'CEmailValidator',
        'url' => 'CUrlValidator',
        'unique' => 'CUniqueValidator',
        'compare' => 'CCompareValidator',
        'length' => 'CStringValidator',
        'in' => 'CRangeValidator',
        //'numerical' => 'CNumberValidator',
        'number' => 'CNumberValidator',
        'captcha' => 'CCaptchaValidator',
        'type' => 'CTypeValidator',
        'file' => 'CFileValidator',
        'boolean' => 'CBooleanValidator',
        'date' => 'CDateValidator',
    );

    /**
     * Renders a text field for a model attribute.
     * This method is a wrapper of {@link CHtml::activeTextField}.
     * Please check {@link CHtml::activeTextField} for detailed information
     * about the parameters for this method.
     * @param CModel $model the data model
     * @param string $attribute the attribute
     * @param array $htmlOptions additional HTML attributes.
     * @return string the generated input field
     */
    public function textField($model, $attribute, $htmlOptions = array())
    {
        $validators = $model->getValidators($attribute);
        $YiiValidators2jqueryValidators = array_flip(self::$mapToYiiValidators);
        foreach ($validators as $validator) {
            /*
            if ($validator instanceof CRequiredValidator) {
                $htmlOptions['class'] = 'required';
            }*/
            //  懒得搞了 图方便了：
            $validatorClass = get_class($validator);
            if (isset($YiiValidators2jqueryValidators[$validatorClass])) {
                if (isset($htmlOptions['class'])) {
                    $htmlOptions['class'] .= ' '.$YiiValidators2jqueryValidators[$validatorClass];
                } else {
                    $htmlOptions['class'] = $YiiValidators2jqueryValidators[$validatorClass];
                }
            }
        }
        return CHtml::activeTextField($model, $attribute, $htmlOptions);
    }

}
