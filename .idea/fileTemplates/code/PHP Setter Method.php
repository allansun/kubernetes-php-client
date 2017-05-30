/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
#if (${STATIC} != "static")
 * @return self
#end
 */
public ${STATIC} function set${NAME}($${PARAM_NAME})
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $this->_createPropertyValue($${PARAM_NAME}, ${TYPE_HINT.replace("[]","")}::class,#if ($TYPE_HINT.endsWith("[]")) true #else false #end);
    return $this;
#end
}