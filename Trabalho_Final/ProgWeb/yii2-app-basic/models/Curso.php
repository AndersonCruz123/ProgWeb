<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property integer $id
 * @property string $sigla
 * @property string $nome
 *
 * @property Aluno[] $alunos
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required', 'message'=>'Este campo é obrigatório'],
            [['id'], 'integer'],
            [['sigla'], 'string', 'max' => 6],
            [['sigla'], 'required', 'message'=>'Este campo é obrigatório'],
            [['nome'], 'string', 'max' => 50],
            [['nome'], 'required', 'message'=>'Este campo é obrigatório']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID do curso',
            'sigla' => 'Sigla do curso',
            'nome' => 'Nome do curso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunos()
    {
        return $this->hasMany(Aluno::className(), ['id_curso' => 'id']);
    }
}
