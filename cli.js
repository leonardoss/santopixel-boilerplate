#!/usr/bin/env node

//https://medium.com/netscape/a-guide-to-create-a-nodejs-command-line-package-c2166ad0452e

const [,, ...args] = process.argv

console.log(`Hello World ${args}`)