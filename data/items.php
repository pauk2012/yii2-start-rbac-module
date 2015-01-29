<?php
return [
    'accessBackend' => [
        'type' => 2,
        'description' => 'Can access backend',
    ],
    'administrateRbac' => [
        'type' => 2,
        'description' => 'Can administrate all "RBAC" module',
        'children' => [
            'BViewRoles',
            'BCreateRoles',
            'BUpdateRoles',
            'BDeleteRoles',
            'BViewPermissions',
            'BCreatePermissions',
            'BUpdatePermissions',
            'BDeletePermissions',
            'BViewRules',
            'BCreateRules',
            'BUpdateRules',
            'BDeleteRules',
        ],
    ],
    'BViewRoles' => [
        'type' => 2,
        'description' => 'Can view roles list',
    ],
    'BCreateRoles' => [
        'type' => 2,
        'description' => 'Can create roles',
    ],
    'BUpdateRoles' => [
        'type' => 2,
        'description' => 'Can update roles',
    ],
    'BDeleteRoles' => [
        'type' => 2,
        'description' => 'Can delete roles',
    ],
    'BViewPermissions' => [
        'type' => 2,
        'description' => 'Can view permissions list',
    ],
    'BCreatePermissions' => [
        'type' => 2,
        'description' => 'Can create permissions',
    ],
    'BUpdatePermissions' => [
        'type' => 2,
        'description' => 'Can update permissions',
    ],
    'BDeletePermissions' => [
        'type' => 2,
        'description' => 'Can delete permissions',
    ],
    'BViewRules' => [
        'type' => 2,
        'description' => 'Can view rules list',
    ],
    'BCreateRules' => [
        'type' => 2,
        'description' => 'Can create rules',
    ],
    'BUpdateRules' => [
        'type' => 2,
        'description' => 'Can update rules',
    ],
    'BDeleteRules' => [
        'type' => 2,
        'description' => 'Can delete rules',
    ],
    'user' => [
        'type' => 1,
        'description' => 'User',
    ],
    'admin' => [
        'type' => 1,
        'description' => 'Admin',
        'children' => [
            'user',
        ],
    ],
    'superadmin' => [
        'type' => 1,
        'description' => 'Super admin',
        'children' => [
            'admin',
            'accessBackend',
            'administrateRbac',
            'administrateUsers',
            'administrateBlogs',
            'administrateComments',
            'administrateTrainers',
            'administrateAccounts',
            'administrateHalls',
            'administrateKlasses',
            'administrateTaxonomy',
        ],
    ],
    'administrateUsers' => [
        'type' => 2,
        'description' => 'Can administrate all "Users" module',
        'children' => [
            'BViewUsers',
            'BCreateUsers',
            'BUpdateUsers',
            'BDeleteUsers',
            'viewUsers',
            'createUsers',
            'updateUsers',
            'updateOwnUsers',
            'deleteUsers',
            'deleteOwnUsers',
        ],
    ],
    'BViewUsers' => [
        'type' => 2,
        'description' => 'Can view backend users list',
    ],
    'BCreateUsers' => [
        'type' => 2,
        'description' => 'Can create backend users',
    ],
    'BUpdateUsers' => [
        'type' => 2,
        'description' => 'Can update backend users',
    ],
    'BDeleteUsers' => [
        'type' => 2,
        'description' => 'Can delete backend users',
    ],
    'viewUsers' => [
        'type' => 2,
        'description' => 'Can view users list',
    ],
    'createUsers' => [
        'type' => 2,
        'description' => 'Can create users',
    ],
    'updateUsers' => [
        'type' => 2,
        'description' => 'Can update users',
        'children' => [
            'updateOwnUsers',
        ],
    ],
    'updateOwnUsers' => [
        'type' => 2,
        'description' => 'Can update own user profile',
        'ruleName' => 'author',
    ],
    'deleteUsers' => [
        'type' => 2,
        'description' => 'Can delete users',
        'children' => [
            'deleteOwnUsers',
        ],
    ],
    'deleteOwnUsers' => [
        'type' => 2,
        'description' => 'Can delete own user profile',
        'ruleName' => 'author',
    ],
    'administrateBlogs' => [
        'type' => 2,
        'description' => 'Can administrate all "Blogs" module',
        'children' => [
            'BViewBlogs',
            'BCreateBlogs',
            'BUpdateBlogs',
            'BDeleteBlogs',
            'viewBlogs',
            'createBlogs',
            'updateBlogs',
            'updateOwnBlogs',
            'deleteBlogs',
            'deleteOwnBlogs',
        ],
    ],
    'BViewBlogs' => [
        'type' => 2,
        'description' => 'Can view backend blogs list',
    ],
    'BCreateBlogs' => [
        'type' => 2,
        'description' => 'Can create backend blogs',
    ],
    'BUpdateBlogs' => [
        'type' => 2,
        'description' => 'Can update backend blogs',
    ],
    'BDeleteBlogs' => [
        'type' => 2,
        'description' => 'Can delete backend blogs',
    ],
    'viewBlogs' => [
        'type' => 2,
        'description' => 'Can view blogs',
    ],
    'createBlogs' => [
        'type' => 2,
        'description' => 'Can create blogs',
    ],
    'updateBlogs' => [
        'type' => 2,
        'description' => 'Can update blogs',
        'children' => [
            'updateOwnBlogs',
        ],
    ],
    'updateOwnBlogs' => [
        'type' => 2,
        'description' => 'Can update own blogs',
        'ruleName' => 'author',
    ],
    'deleteBlogs' => [
        'type' => 2,
        'description' => 'Can delete blogs',
        'children' => [
            'deleteOwnBlogs',
        ],
    ],
    'deleteOwnBlogs' => [
        'type' => 2,
        'description' => 'Can delete own blogs',
        'ruleName' => 'author',
    ],
    'administrateComments' => [
        'type' => 2,
        'description' => 'Can administrate all "Comments" module',
        'children' => [
            'BViewCommentsModels',
            'BCreateCommentsModels',
            'BUpdateCommentsModels',
            'BDeleteCommentsModels',
            'BManageCommentsModule',
            'BViewComments',
            'BUpdateComments',
            'BDeleteComments',
            'viewComments',
            'createComments',
            'updateComments',
            'updateOwnComments',
            'deleteComments',
            'deleteOwnComments',
        ],
    ],
    'BViewCommentsModels' => [
        'type' => 2,
        'description' => 'Can view backend comments models list',
    ],
    'BCreateCommentsModels' => [
        'type' => 2,
        'description' => 'Can create backend comments models',
    ],
    'BUpdateCommentsModels' => [
        'type' => 2,
        'description' => 'Can update backend comments models',
    ],
    'BDeleteCommentsModels' => [
        'type' => 2,
        'description' => 'Can delete backend comments models',
    ],
    'BManageCommentsModule' => [
        'type' => 2,
        'description' => 'Can enable or disable comments for installed modules',
    ],
    'BViewComments' => [
        'type' => 2,
        'description' => 'Can view backend comments list',
    ],
    'BUpdateComments' => [
        'type' => 2,
        'description' => 'Can update backend comments',
    ],
    'BDeleteComments' => [
        'type' => 2,
        'description' => 'Can delete backend comments',
    ],
    'viewComments' => [
        'type' => 2,
        'description' => 'Can view comments',
    ],
    'createComments' => [
        'type' => 2,
        'description' => 'Can create comments',
    ],
    'updateComments' => [
        'type' => 2,
        'description' => 'Can update comments',
        'children' => [
            'updateOwnComments',
        ],
    ],
    'updateOwnComments' => [
        'type' => 2,
        'description' => 'Can update own comments',
        'ruleName' => 'author',
    ],
    'deleteComments' => [
        'type' => 2,
        'description' => 'Can delete comments',
        'children' => [
            'deleteOwnComments',
        ],
    ],
    'deleteOwnComments' => [
        'type' => 2,
        'description' => 'Can delete own comments',
        'ruleName' => 'author',
    ],
    'administrateTrainers' => [
        'type' => 2,
        'description' => 'Can administrate all "Trainers" module',
        'children' => [
            'BViewTrainers',
            'BCreateTrainers',
            'BUpdateTrainers',
            'BDeleteTrainers',
            'viewTrainers',
            'createTrainers',
            'updateTrainers',
            'updateOwnTrainers',
            'deleteTrainers',
            'deleteOwnTrainers',
        ],
    ],
    'BViewTrainers' => [
        'type' => 2,
        'description' => 'Can view backend trainers list',
    ],
    'BCreateTrainers' => [
        'type' => 2,
        'description' => 'Can create backend trainers',
    ],
    'BUpdateTrainers' => [
        'type' => 2,
        'description' => 'Can update backend trainers',
    ],
    'BDeleteTrainers' => [
        'type' => 2,
        'description' => 'Can delete backend trainers',
    ],
    'viewTrainers' => [
        'type' => 2,
        'description' => 'Can view trainers list',
    ],
    'createTrainers' => [
        'type' => 2,
        'description' => 'Can create trainers',
    ],
    'updateTrainers' => [
        'type' => 2,
        'description' => 'Can update trainers',
        'children' => [
            'updateOwnTrainers',
        ],
    ],
    'updateOwnTrainers' => [
        'type' => 2,
        'description' => 'Can update own trainers',
        'ruleName' => 'author',
    ],
    'deleteTrainers' => [
        'type' => 2,
        'description' => 'Can delete trainers',
        'children' => [
            'deleteOwnTrainers',
        ],
    ],
    'deleteOwnTrainers' => [
        'type' => 2,
        'description' => 'Can delete own Trainers',
        'ruleName' => 'author',
    ],
    'administrateAccounts' => [
        'type' => 2,
        'description' => 'Can administrate all "Accounts" module',
        'children' => [
            'BViewAccounts',
            'BCreateAccounts',
            'BUpdateAccounts',
            'BDeleteAccounts',
            'viewAccounts',
            'createAccounts',
            'updateAccounts',
            'updateOwnAccounts',
            'deleteAccounts',
            'deleteOwnAccounts',
        ],
    ],
    'BViewAccounts' => [
        'type' => 2,
        'description' => 'Can view backend accounts list',
    ],
    'BCreateAccounts' => [
        'type' => 2,
        'description' => 'Can create backend accounts',
    ],
    'BUpdateAccounts' => [
        'type' => 2,
        'description' => 'Can update backend accounts',
    ],
    'BDeleteAccounts' => [
        'type' => 2,
        'description' => 'Can delete backend accounts',
    ],
    'viewAccounts' => [
        'type' => 2,
        'description' => 'Can view accounts list',
    ],
    'createAccounts' => [
        'type' => 2,
        'description' => 'Can create accounts',
    ],
    'updateAccounts' => [
        'type' => 2,
        'description' => 'Can update accounts',
        'children' => [
            'updateOwnAccounts',
        ],
    ],
    'updateOwnAccounts' => [
        'type' => 2,
        'description' => 'Can update own accounts',
        'ruleName' => 'author',
    ],
    'deleteAccounts' => [
        'type' => 2,
        'description' => 'Can delete accounts',
        'children' => [
            'deleteOwnAccounts',
        ],
    ],
    'deleteOwnAccounts' => [
        'type' => 2,
        'description' => 'Can delete own accounts',
        'ruleName' => 'author',
    ],
    'administrateHalls' => [
        'type' => 2,
        'description' => 'Can administrate all "Halls" module',
        'children' => [
            'BViewHalls',
            'BCreateHalls',
            'BUpdateHalls',
            'BDeleteHalls',
            'viewHalls',
            'createHalls',
            'updateHalls',
            'updateOwnHalls',
            'deleteHalls',
            'deleteOwnHalls',
        ],
    ],
    'BViewHalls' => [
        'type' => 2,
        'description' => 'Can view backend halls list',
    ],
    'BCreateHalls' => [
        'type' => 2,
        'description' => 'Can create backend halls',
    ],
    'BUpdateHalls' => [
        'type' => 2,
        'description' => 'Can update backend halls',
    ],
    'BDeleteHalls' => [
        'type' => 2,
        'description' => 'Can delete backend halls',
    ],
    'viewHalls' => [
        'type' => 2,
        'description' => 'Can view halls list',
    ],
    'createHalls' => [
        'type' => 2,
        'description' => 'Can create halls',
    ],
    'updateHalls' => [
        'type' => 2,
        'description' => 'Can update halls',
        'children' => [
            'updateOwnHalls',
        ],
    ],
    'updateOwnHalls' => [
        'type' => 2,
        'description' => 'Can update own halls',
        'ruleName' => 'author',
    ],
    'deleteHalls' => [
        'type' => 2,
        'description' => 'Can delete halls',
        'children' => [
            'deleteOwnHalls',
        ],
    ],
    'deleteOwnHalls' => [
        'type' => 2,
        'description' => 'Can delete own Halls',
        'ruleName' => 'author',
    ],
    'administrateKlasses' => [
        'type' => 2,
        'description' => 'Can administrate all "Klasses" module',
        'children' => [
            'BViewKlasses',
            'BCreateKlasses',
            'BUpdateKlasses',
            'BDeleteKlasses',
            'viewKlasses',
            'createKlasses',
            'updateKlasses',
            'updateOwnKlasses',
            'deleteKlasses',
            'deleteOwnKlasses',
        ],
    ],
    'BViewKlasses' => [
        'type' => 2,
        'description' => 'Can view backend classes list',
    ],
    'BCreateKlasses' => [
        'type' => 2,
        'description' => 'Can create backend classes',
    ],
    'BUpdateKlasses' => [
        'type' => 2,
        'description' => 'Can update backend classes',
    ],
    'BDeleteKlasses' => [
        'type' => 2,
        'description' => 'Can delete backend classes',
    ],
    'viewKlasses' => [
        'type' => 2,
        'description' => 'Can view classes list',
    ],
    'createKlasses' => [
        'type' => 2,
        'description' => 'Can create classes',
    ],
    'updateKlasses' => [
        'type' => 2,
        'description' => 'Can update classes',
        'children' => [
            'updateOwnKlasses',
        ],
    ],
    'updateOwnKlasses' => [
        'type' => 2,
        'description' => 'Can update own classes',
        'ruleName' => 'author',
    ],
    'deleteKlasses' => [
        'type' => 2,
        'description' => 'Can delete classes',
        'children' => [
            'deleteOwnKlasses',
        ],
    ],
    'deleteOwnKlasses' => [
        'type' => 2,
        'description' => 'Can delete own classes',
        'ruleName' => 'author',
    ],
    'administrateTaxonomy' => [
        'type' => 2,
        'description' => 'Can administrate all "Taxonomy" module',
        'children' => [
            'BViewTaxonomy',
            'BCreateTaxonomy',
            'BUpdateTaxonomy',
            'BDeleteTaxonomy',
            'viewTaxonomy',
            'createTaxonomy',
            'updateTaxonomy',
            'updateOwnTaxonomy',
            'deleteTaxonomy',
            'deleteOwnTaxonomy',
        ],
    ],
    'BViewTaxonomy' => [
        'type' => 2,
        'description' => 'Can view backend taxonomy list',
    ],
    'BCreateTaxonomy' => [
        'type' => 2,
        'description' => 'Can create backend taxonomy',
    ],
    'BUpdateTaxonomy' => [
        'type' => 2,
        'description' => 'Can update backend taxonomy',
    ],
    'BDeleteTaxonomy' => [
        'type' => 2,
        'description' => 'Can delete backend taxonomy',
    ],
    'viewTaxonomy' => [
        'type' => 2,
        'description' => 'Can view taxonomy list',
    ],
    'createTaxonomy' => [
        'type' => 2,
        'description' => 'Can create taxonomy',
    ],
    'updateTaxonomy' => [
        'type' => 2,
        'description' => 'Can update taxonomy',
        'children' => [
            'updateOwnTaxonomy',
        ],
    ],
    'updateOwnTaxonomy' => [
        'type' => 2,
        'description' => 'Can update own taxonomy',
        'ruleName' => 'author',
    ],
    'deleteTaxonomy' => [
        'type' => 2,
        'description' => 'Can delete taxonomy',
        'children' => [
            'deleteOwnTaxonomy',
        ],
    ],
    'deleteOwnTaxonomy' => [
        'type' => 2,
        'description' => 'Can delete own Taxonomy',
        'ruleName' => 'author',
    ],
];
