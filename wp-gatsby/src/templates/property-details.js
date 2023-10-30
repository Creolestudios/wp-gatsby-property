import React from "react"
import { graphql } from "gatsby"
import Layout from "../components/layout"
import parse from "html-react-parser"

const PropertyDetails = ({ data }) => {
  const property = data.wpProperty

  return (
    <Layout>
      <h1>{property.title}</h1>
      <p>{property.date}</p>
      {!!property.content && (
        <section itemProp="articleBody">{parse(property.content)}</section>
      )}
    </Layout>
  )
}

export default PropertyDetails

export const query = graphql`
  query PropertyById($id: String!) {
    wpProperty(id: { eq: $id }) {
      title
      content
      date(formatString: "MMMM DD, YYYY")
    }
  }
`
