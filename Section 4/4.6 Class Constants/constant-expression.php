<?php

class Register
{
    const MIN_USERNAME_LENGTH = 5;
    const MIN_PASSWORD_LENGTH = MIN_USERNAME_LENGTH + 3;
    const MAX_EMAIL = 3 * 3 * 3;
}

echo Register::MAX_EMAIL;