<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property integer $id
 * @property integer $matricula
 * @property string $nome
 * @property string $sexo
 * @property integer $id_curso
 * @property integer $ano_ingresso
 *
 * @property Curso $idCurso
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matricula', 'id_curso', 'ano_ingresso'], 'integer'],
            [['matricula', 'id_curso', 'ano_ingresso'], 'required', 'message'=>'Este campo é obrigatório'],
            [['nome'], 'string', 'max' => 200],
            [['nome'], 'required', 'message'=>'Este campo é obrigatório'],
            [['sexo'], 'string', 'max' => 1],
            [['sexo'],'required', 'message'=>'Este campo é obrigatório']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matrícula',
            'nome' => 'Nome do aluno',
            'sexo' => 'Sexo',
            'id_curso' => 'Curso de graduação',
            'ano_ingresso' => 'Ano de ingresso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCurso()
    {
        return $this->hasOne(Curso::className(), ['id' => 'id_curso']);
    }

    public function afterFind(){
        return $this->id_curso = Curso::findOne($this->id_curso)->nome;
    }
}
