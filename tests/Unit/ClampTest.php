<?php

test('clamps lower numbers to min', function () {
    assertEquals(2, clamp(1, 2, 3));
});

test('clamps higher numbers to max', function () {
    assertEquals(3, clamp(5, 2, 3));
});

test('does not clamp numbers within range', function () {
    assertEquals(5, clamp(5, 1, 10));
});

test('clamps floating numbers', function () {
    assertEquals(4.5, clamp(4.5, 1, 10));
});

test('clamps negative numbers', function () {
    assertEquals(1, clamp(-10, 1, 5));
});