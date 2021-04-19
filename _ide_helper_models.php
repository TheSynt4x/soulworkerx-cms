<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $UAID
 * @property string $ACCOUNT_ID
 * @property mixed $PASSWORD
 * @property int $LASTSERVER_ID
 * @property int $STATE
 * @property string $CREATE_DATE
 * @property string $LOGIN_DATE
 * @property string $LOGOUT_DATE
 * @property int $CASH
 * @property int $CLEAR_TUTORIAL
 * @property int $ECHELON_LEVEL
 * @property int $ECHELON_EXP
 * @property int $IP
 * @property int $SECOND_PW_CHECK
 * @property int $TRADE_PW_CHECK
 * @property string $MAC_ADDR
 * @property int $POWER
 * @property mixed|null $SECOND_PASSWORD
 * @property mixed|null $TRADE_PASSWORD
 * @property string $IP_STRING
 * @property int|null $BLOCK_TYPE
 * @property int|null $CONNECT_TIME
 * @property int|null $OFF_LINE_TIME
 * @property int|null $LOGOUT_TIME
 * @property int|null $MESSAGE_SEND_TIME
 * @property string|null $SECOND_PW_CHECK_DATE
 * @property string|null $TRADE_PW_CHECK_DATE
 * @property int|null $CHANNEL_TYPE
 * @property string|null $LAST_LOGIN_DATE
 * @property int|null $COMEBACK_DATE
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereACCOUNTID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBLOCKTYPE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCASH($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCHANNELTYPE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCLEARTUTORIAL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCOMEBACKDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCONNECTTIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCREATEDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereECHELONEXP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereECHELONLEVEL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIPSTRING($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLASTLOGINDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLASTSERVERID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLOGINDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLOGOUTDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLOGOUTTIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMACADDR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMESSAGESENDTIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereOFFLINETIME($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePOWER($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSECONDPASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSECONDPWCHECK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSECONDPWCHECKDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSTATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTRADEPASSWORD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTRADEPWCHECK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTRADEPWCHECKDATE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUAID($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

