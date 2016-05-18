var citiesArray = [
    {
        'city': 'Актюбинск',
        'tOut': -31,
        'warm': -7.3,
        'time': 203
    },
    {
        'city': 'Алма-ата',
        'tOut': -25,
        'warm': -2.1,
        'time': 166
    },
    {
        'city': 'Арсеньев',
        'tOut': -30,
        'warm': -8.6,
        'time': 200
    },
    {
        'city': 'Архангельск',
        'tOut': -31,
        'warm': -4.7,
        'time': 251
    },
    {
        'city': 'Астрахань',
        'tOut': -23,
        'warm': -1.6,
        'time': 172
    },
    {
        'city': 'Баку',
        'tOut': -4,
        'warm': 5.1,
        'time': 119
    },
    {
        'city': 'Барнаул',
        'tOut': -39,
        'warm': -8.3,
        'time': 219
    },
    {
        'city': 'Барнаул',
        'tOut': -33,
        'warm': -6.4,
        'time': 208
    },
    {
        'city': 'Батуми',
        'tOut': -1,
        'warm': 7.6,
        'time': 121
    },
    {
        'city': 'Белгород',
        'tOut': -23,
        'warm': -2.2,
        'time': 196
    },
    {
        'city': 'Бийск',
        'tOut': -38,
        'warm': -8.7,
        'time': 222
    },
    {
        'city': 'Братск',
        'tOut': -43,
        'warm': -10.3,
        'time': 245
    },
    {
        'city': 'Брест',
        'tOut': -20,
        'warm': -0.4,
        'time': 186
    },
    {
        'city': 'Брянск',
        'tOut': -26,
        'warm': -2.6,
        'time': 206
    },
    {
        'city': 'Бузулук',
        'tOut': -32,
        'warm': -6.5,
        'time': 204
    },
    {
        'city': 'Вильнюс',
        'tOut': -23,
        'warm': -0.9,
        'time': 194
    },
    {
        'city': 'Владивосток',
        'tOut': -24,
        'warm': -4.8,
        'time': 201
    },
    {
        'city': 'Владимир',
        'tOut': -28,
        'warm': -4.4,
        'time': 217
    },
    {
        'city': 'Волгоград',
        'tOut': -25,
        'warm': -3.4,
        'time': 182
    },
    {
        'city': 'Вологда',
        'tOut': -31,
        'warm': -4.8,
        'time': 228
    },
    {
        'city': 'Воронеж',
        'tOut': -26,
        'warm': -3.4,
        'time': 199
    },
    {
        'city': 'Ворошиловград',
        'tOut': -25,
        'warm': -1.6,
        'time': 180
    },
    {
        'city': 'Гагра',
        'tOut': -2,
        'warm': 7.5,
        'time': 124
    },
    {
        'city': 'Горький',
        'tOut': -30,
        'warm': -4.7,
        'time': 218
    },
    {
        'city': 'Грозный',
        'tOut': -18,
        'warm': 0.4,
        'time': 164
    },
    {
        'city': 'Днепропетровск',
        'tOut': -23,
        'warm': -1,
        'time': 175
    },
    {
        'city': 'Донецк',
        'tOut': -23,
        'warm': -1.8,
        'time': 183
    },
    {
        'city': 'Екатеринбург',
        'tOut': -35,
        'warm': -6.4,
        'time': 228
    },
    {
        'city': 'Иваново',
        'tOut': -29,
        'warm': -4.4,
        'time': 217
    },
    {
        'city': 'Ижевск',
        'tOut': -34,
        'warm': -6,
        'time': 223
    },
    {
        'city': 'Иркутск',
        'tOut': -37,
        'warm': -8.9,
        'time': 241
    },
    {
        'city': 'Йошкар-Ола',
        'tOut': -34,
        'warm': -6.1,
        'time': 220
    },
    {
        'city': 'Казань',
        'tOut': -32,
        'warm': -5.7,
        'time': 218
    },
    {
        'city': 'Калинин',
        'tOut': -29,
        'warm': -3.7,
        'time': 219
    },
    {
        'city': 'Калининград',
        'tOut': -18,
        'warm': -0.6,
        'time': 195
    },
    {
        'city': 'Калуга',
        'tOut': -27,
        'warm': -3.5,
        'time': 214
    },
    {
        'city': 'Караганда',
        'tOut': -32,
        'warm': -7.5,
        'time': 212
    },
    {
        'city': 'Кемерово',
        'tOut': -39,
        'warm': -8.8,
        'time': 232
    },
    {
        'city': 'Киев',
        'tOut': -22,
        'warm': -1.1,
        'time': 187
    },
    {
        'city': 'Киров',
        'tOut': -33,
        'warm': -5.8,
        'time': 231
    },
    {
        'city': 'Кисловодск',
        'tOut': -16,
        'warm': -0.4,
        'time': 179
    },
    {
        'city': 'Кишинев',
        'tOut': -16,
        'warm': 0.6,
        'time': 166
    },
    {
        'city': 'Кострома',
        'tOut': -31,
        'warm': -4.5,
        'time': 224
    },
    {
        'city': 'Краснодар',
        'tOut': -19,
        'warm': 1.5,
        'time': 152
    },
    {
        'city': 'Красноярск',
        'tOut': -39,
        'warm': -7.2,
        'time': 235
    },
    {
        'city': 'Куйбышев',
        'tOut': -30,
        'warm': -6.1,
        'time': 206
    },
    {
        'city': 'Курган',
        'tOut': -37,
        'warm': -8.7,
        'time': 217
    },
    {
        'city': 'Курск',
        'tOut': -26,
        'warm': -3,
        'time': 198
    },
    {
        'city': 'Кустанай',
        'tOut': -35,
        'warm': -8.7,
        'time': 213
    },
    {
        'city': 'Ленинград',
        'tOut': -26,
        'warm': -2.2,
        'time': 219
    },
    {
        'city': 'Липецк',
        'tOut': -27,
        'warm': -3.9,
        'time': 199
    },
    {
        'city': 'Магадан',
        'tOut': -29,
        'warm': -9.6,
        'time': 278
    },
    {
        'city': 'Магнитогорск',
        'tOut': -34,
        'warm': -7.9,
        'time': 218
    },
    {
        'city': 'Майкоп',
        'tOut': -19,
        'warm': 1.7,
        'time': 154
    },
    {
        'city': 'Минск',
        'tOut': -25,
        'warm': -1.2,
        'time': 203
    },
    {
        'city': 'Москва',
        'tOut': -26,
        'warm': -3.6,
        'time': 213
    },
    {
        'city': 'Мурманск',
        'tOut': -27,
        'warm': -3.3,
        'time': 281
    },
    {
        'city': 'Нальчик',
        'tOut': -18,
        'warm': -0.4,
        'time': 170
    },
    {
        'city': 'Нижний Тагил',
        'tOut': -36,
        'warm': -6.6,
        'time': 238
    },
    {
        'city': 'Николаевск-на-Амуре',
        'tOut': -35,
        'warm': -11.2,
        'time': 221
    },
    {
        'city': 'Новгород',
        'tOut': -27,
        'warm': -2.6,
        'time': 220
    },
    {
        'city': 'Новороссийск',
        'tOut': -13,
        'warm': 4.4,
        'time': 134
    },
    {
        'city': 'Новосибирск',
        'tOut': -39,
        'warm': -9.1,
        'time': 227
    },
    {
        'city': 'Одесса',
        'tOut': -18,
        'warm': 1,
        'time': 165
    },
    {
        'city': 'Омск',
        'tOut': -37,
        'warm': -9.5,
        'time': 220
    },
    {
        'city': 'Орел',
        'tOut': -26,
        'warm': -3.3,
        'time': 207
    },
    {
        'city': 'Оренбург',
        'tOut': -31,
        'warm': -8.1,
        'time': 201
    },
    {
        'city': 'Пенза',
        'tOut': -29,
        'warm': -5.1,
        'time': 206
    },
    {
        'city': 'Пермь',
        'tOut': -35,
        'warm': -6.4,
        'time': 226
    },
    {
        'city': 'Петрозаводск',
        'tOut': -29,
        'warm': -3.3,
        'time': 242
    },
    {
        'city': 'Петропавловск-Камчатский',
        'tOut': -20,
        'warm': -2.1,
        'time': 259
    },
    {
        'city': 'Псков',
        'tOut': -26,
        'warm': -2,
        'time': 212
    },
    {
        'city': 'Рига',
        'tOut': -20,
        'warm': -0.4,
        'time': 199
    },
    {
        'city': 'Ростов-на-Дону',
        'tOut': -22,
        'warm': -1.1,
        'time': 175
    },
    {
        'city': 'Рязань',
        'tOut': -27,
        'warm': -4.2,
        'time': 212
    },
    {
        'city': 'Самарканд',
        'tOut': -13,
        'warm': 2.8,
        'time': 132
    },
    {
        'city': 'Саранск',
        'tOut': -30,
        'warm': -4.9,
        'time': 210
    },
    {
        'city': 'Саратов',
        'tOut': -27,
        'warm': -5,
        'time': 193
    },
    {
        'city': 'Смоленск',
        'tOut': -26,
        'warm': -2.7,
        'time': 210
    },
    {
        'city': 'Сочи',
        'tOut': -3,
        'warm': 6.4,
        'time': 90
    },
    {
        'city': 'Ставрополь',
        'tOut': -19,
        'warm': -0.3,
        'time': 169
    },
    {
        'city': 'Сургут',
        'tOut': -43,
        'warm': -9.7,
        'time': 257
    },
    {
        'city': 'Сухуми',
        'tOut': -3,
        'warm': 7,
        'time': 122
    },
    {
        'city': 'Тайшет',
        'tOut': -40,
        'warm': -8.5,
        'time': 244
    },
    {
        'city': 'Таллин',
        'tOut': -22,
        'warm': -0.8,
        'time': 221
    },
    {
        'city': 'Тамбов',
        'tOut': -28,
        'warm': -4.2,
        'time': 202
    },
    {
        'city': 'Ташкент',
        'tOut': -15,
        'warm': 2.4,
        'time': 130
    },
    {
        'city': 'Тбилиси',
        'tOut': -8,
        'warm': 4.2,
        'time': 152
    },
    {
        'city': 'Томск',
        'tOut': -40,
        'warm': -8.8,
        'time': 234
    },
    {
        'city': 'Тула',
        'tOut': -27,
        'warm': -3.8,
        'time': 207
    },
    {
        'city': 'Тюмень',
        'tOut': -37,
        'warm': -7.5,
        'time': 220
    },
    {
        'city': 'Ульяновск',
        'tOut': -31,
        'warm': -5.7,
        'time': 213
    },
    {
        'city': 'Уральск',
        'tOut': -31,
        'warm': -6.5,
        'time': 199
    },
    {
        'city': 'Уренгой',
        'tOut': -46,
        'warm': -13,
        'time': 284
    },
    {
        'city': 'Уфа',
        'tOut': -35,
        'warm': -6.6,
        'time': 214
    },
    {
        'city': 'Ухта',
        'tOut': -31,
        'warm': -4.4,
        'time': 258
    },
    {
        'city': 'Хабаровск',
        'tOut': -31,
        'warm': -10.1,
        'time': 205
    },
    {
        'city': 'Харьков',
        'tOut': -23,
        'warm': -2.1,
        'time': 189
    },
    {
        'city': 'Целиноград',
        'tOut': -35,
        'warm': -8.7,
        'time': 215
    },
    {
        'city': 'Чебоксары',
        'tOut': -32,
        'warm': -5.4,
        'time': 217
    },
    {
        'city': 'Челябинск',
        'tOut': -34,
        'warm': -7.3,
        'time': 218
    },
    {
        'city': 'Череповец',
        'tOut': -31,
        'warm': -4.3,
        'time': 225
    },
    {
        'city': 'Чернигов',
        'tOut': -23,
        'warm': -1.7,
        'time': 191
    },
    {
        'city': 'Шарлык',
        'tOut': -33,
        'warm': -7.1,
        'time': 213
    },
    {
        'city': 'Элиста',
        'tOut': -23,
        'warm': -1.8,
        'time': 176
    },
    {
        'city': 'Эмба',
        'tOut': -30,
        'warm': -6.9,
        'time': 197
    },
    {
        'city': 'Ялта',
        'tOut': -6,
        'warm': 5.2,
        'time': 126
    },
    {
        'city': 'Ярославль',
        'tOut': -31,
        'warm': -1.5,
        'time': 222
    }
];