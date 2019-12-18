import groovy.json.JsonSlurperClassic

timeout(time: 15, unit: 'MINUTES') {
    node {
       stage('Git SCM') {
           checkout scm
       }
        
       stage('Build') {
           // Clean previously built sdks
           cleanWs deleteDirs: true, patterns: [[pattern: '*-sdk*', type: 'INCLUDE']]
           copyArtifacts filter: 'php-sdk.zip', fingerprintArtifacts: true, projectName: 'SDK Configs/master', selector: lastWithArtifacts(), target: './'
           sh "unzip php-sdk.zip -d php-sdk"
       }
        
       stage('Deploy') {
           def json = readFile(file:'php-sdk/configPhp.json')
           def data = new JsonSlurperClassic().parseText(json)
           def version = data.artifactVersion
           
           sh "git add php-sdk/"
           sh "git commit -am \"Version:  ${version}\""
           sh 'git push'
           sh "git tag ${version}"
           sh 'git push --tags'
       }
   }
}
